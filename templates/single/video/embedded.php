<?php

/**
 * Display Video HTML5
 *
 * @since v.1.0.0
 * @author themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

if ( ! defined( 'ABSPATH' ) )
	exit;

$video_info = tutor_utils()->get_video_info();

do_action( 'tutor_lesson/single/before/video/embedded' );
?>
<?php if($video_info ): ?>
    <div class="course-players">
        <div class="loading-spinner"></div>
        <input type="hidden" id="tutor_video_tracking_information" value="<?php echo esc_attr(json_encode($jsonData??null)); ?>">

        <?php echo tutor_utils()->array_get('source_embedded', $video_info); ?>
    </div>
<?php endif; ?>

<?php do_action('tutor_lesson/single/after/video/embedded'); ?>