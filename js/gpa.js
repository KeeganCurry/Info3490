var Invalid = -1000;

//Insert the input fields for a new class
//into the table.
function addNewClass() {
    var tbody = document.getElementById("classes_tbody");
    var newTr = document.createElement("tr");
    for (var i = 0; i < 3; ++i) {
        var td = document.createElement("td");
        var input = document.createElement("input");
        input.size = "15";
        if (i != 0) {
            input.setAttribute("onchange", "updateCreditsGpa()");
        }
        td.appendChild(input);
        newTr.appendChild(td);
    }
    tbody.appendChild(newTr);
}

//Update the credits and GPA fields.
function updateCreditsGpa() {
    if (document.getElementById) {
        var tbody = document.getElementById("classes_tbody");
        var elements = tbody.getElementsByTagName("input");
        updateCreditsGpaWith(elements);
    }
    else {
        updateCreditsGpaWith(document.classes.elements);
    }
}

//Convert the given float to a string of the closest
//float with two or fewer places after the decimal.
function formatDecimal(aFloat) {
    var digits = "" + Math.round(100 * aFloat);
    var length = digits.length;
    if (length < 3) {
        return "0." + digits;
    }
    else {
        var dp = length - 2;
        return digits.substring(0, dp) + "." + digits.substring(dp, length);
    }
}

//Return the char of aString at index.
//If index is invalid, the results are undefined.
function charAt(aString, index) {
    var length = aString.length;
    return aString.substring(index, index + 1);
}

//Convert the given string to a float or return Invalid
//if the given input is not recognized as credit hours.
function toFloatOrInvalid(input) {
    var length = input.length;
    if (length == 0) {
        return Invalid;
    }
    var first = charAt(input, 0);
    if (first == "0") {
        if (length == 1) {
            return 0.0;
        }
        else if (charAt(input, 1) != ".") {
            return Invalid;
        }
    }
    else if ("123456789".indexOf(first) == -1) {
        return Invalid;
    }
    var i = 1;
    for (; i < length; ++i) {
        var m = ".0123456789".indexOf(charAt(input, i));
        if (m == -1) {
            return Invalid;
        }
        else if (m == 0) {
            break;
        }
    }
    for (var j = i + 1; j < length; j++) {
        if ("0123456789".indexOf(charAt(input, j)) == -1) {
            return Invalid;
        }
    }
    return parseFloat(input);
}

function updateCreditsGpaWith(elements) {
    var totalGradedCredits = 0;
    var totalUngradedCredits = 0;
    var totalPoints = 0;
    
    var haveAtLeastOneGrade = false;
    
    var length = elements.length;
    for (var i = 0; i < length; i += 3) {
        var letter = elements[i + 2].value.toUpperCase();
        if (letter == "X") {
            continue;
        }
    
        var creditsString = elements[i + 1].value;
        if (creditsString == "") {
            continue;
        }
        
        var credits = toFloatOrInvalid(creditsString);
        if (credits == Invalid) {
            alert('Not a number: "' + creditsString + '"');
            return;
        }
        
        if (letter == "N") {
            totalUngradedCredits += credits;
            continue;
        }
        else {
            totalGradedCredits += credits;
        }        
        
        if (letter == "") {
            continue;
        }
        var points = letterToPoints(letter);
        if (points == Invalid) {
            alert('Unrecognized letter grade: "' + letter + '"');
            return;
        }
        haveAtLeastOneGrade = true;
        
        totalPoints += credits * points;
    }
    document.results.total_credits.value = totalGradedCredits + totalUngradedCredits;
    if (haveAtLeastOneGrade && totalGradedCredits > 0) {
        document.results.gpa.value = formatDecimal(totalPoints / totalGradedCredits);
    }
    else {
        document.results.gpa.value = "";
    }
}

//Return the points corresponding to the given letter
//grade or Invalid if the input is invalid. The grade
//is expected to be capitalized: A, B, etc.
function letterToPoints(grade) {
    if ("A+" == grade) {
        return 4.3;
    }
    else if ("A" == grade) {
        return 4.0;
    }
    else if ("A-" == grade) {
        return 3.7;
    }
    else if ("B+" == grade) {
        return 3.3;
    }
    else if ("B" == grade) {
        return 3.0;
    }
    else if ("B-" == grade) {
        return 2.7;
    }
    else if ("C+" == grade) {
        return 2.3;
    }
    else if ("C" == grade) {
        return 2.0;
    }
    else if ("F1" == grade) {
        return 1.7;
    }
    else if ("F2" == grade) {
        return 1.3;
    }
    else if ("F3" == grade) {
        return 0.0;
    }
    else {
        //XXX! Should we throw an exception here?
        return Invalid;
    }
}