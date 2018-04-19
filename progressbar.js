var progress = (function ($) {
			var progress = "<?php echo $progress; ?>",
				progress_bar = $('.progress-bar'),
				total_width = progress.width();
			function calculatePercentage(increment_by,is_increment) {
				var progress_percentage;
				if (is_increment == true) {
					progress_percentage = Math.round((progress_bar.width() / total_width) * 100 + increment_by) ;
					progress_percentage = (progress_percentage > 100) ? 100 : progress_percentage;
				} else {
					progress_percentage = Math.round((progress_bar.width() / total_width) * 100 - increment_by) ;
					progress_percentage = (progress_percentage < 0) ? 0 : progress_percentage;
				}
				return progress_percentage;
			}
			return{
				increment: function (increment_by) {
					var progress_percentage = calculatePercentage(increment_by, true);
					progress_bar.css('width',progress_percentage + '%').attr('aria-valuenow', progress_percentage + ' %');
				},
				decrement: function (decrement_by) {
					var progress_percentage = calculatePercentage(decrement_by, false);
					progress_bar.css('width',progress_percentage+'%').attr('aria-valuenow', progress_percentage + ' %');
				},
				reset: function () {
					progress_bar.css('width',0 + '%').attr('aria-valuenow', 0 + ' %');
				},
				complete: function () {
					progress_bar.css('width',100 + '%').attr('aria-valuenow', 100 + ' %');
				}
			};
		})( jQuery);