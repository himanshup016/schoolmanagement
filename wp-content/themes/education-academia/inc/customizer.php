<?php
/**
 * Education Academia Theme Customizer
 *
 * @package Education_Academia
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function educationacademia_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'educationacademia_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'educationacademia_customize_partial_blogdescription',
			)
		);
	}
/* Slider Settings*/
	$wp_customize->add_section( 'educationacademia_slider' ,
	array(
	    'title'      => esc_html__('Slider Settngs', 'education-academia'),
	    'priority'   => 1,
	    ) 
	);

    $wp_customize->add_setting('educationacademia_slider_display',array(
        'default' => 'true',
        'sanitize_callback' => 'educationacademia_sanitize_checkbox'
    ));
    $wp_customize->add_control('educationacademia_slider_display',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide slider','education-academia'),
        'description' => __('Image Size ( 1400px x 800px )','education-academia'),
        'section' => 'educationacademia_slider',
    ));

    for ( $count = 1; $count <= 4; $count++ ) {

        $wp_customize->add_setting( 'educationacademia_slider' . $count, array(
            'default'           => '',
            'sanitize_callback' => 'educationacademia_sanitize_dropdown_pages'
        ) );

        $wp_customize->add_control( 'educationacademia_slider' . $count, array(
            'label'    => __( 'Select Slide Image Page', 'education-academia' ),
            'section'  => 'educationacademia_slider',
            'type'     => 'dropdown-pages'
        ) );
    }

/*Social settings*/
$wp_customize->add_section( 'educationacademia_social' ,
array(
    'title'      => esc_html__('Slider social links', 'education-academia'),
    'priority'   => 1,
    ) 
);

$wp_customize->add_setting(
    'educationacademia_facebook',
    array(
        'default'     => '',
        'description' => __( 'Enter your social media link(URL. Icons will not show if left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );


$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_facebook',
        array(
            'label'      => esc_html__('Facebook', 'education-academia'),
            'section'    => 'educationacademia_social',
            'description' => __( 'Icons will not show if left blank. Enter your social media link(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_facebook',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );
$wp_customize->add_setting(
    'educationacademia_twitter',
    array(
        'default'     => '',
        'description' => __( 'Enter your social media link(URL. Icons will not show if left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );


$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_twitter',
        array(
            'label'      => esc_html__('Twitter', 'education-academia'),
            'section'    => 'educationacademia_social',
            'description' => __( 'Icons will not show if left blank. Enter your social media link(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_twitter',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );
$wp_customize->add_setting(
    'educationacademia_linkedin',
    array(
        'default'     => '',
        'description' => __( 'Enter your social media link(URL. Icons will not show if left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );


$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_linkedin',
        array(
            'label'      => esc_html__('linkedin', 'education-academia'),
            'section'    => 'educationacademia_social',
            'description' => __( 'Icons will not show if left blank. Enter your social media link(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_linkedin',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );
$wp_customize->add_setting(
    'educationacademia_google',
    array(
        'default'     => '',
        'description' => __( 'Enter your social media link(URL. Icons will not show if left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );


$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_google',
        array(
            'label'      => esc_html__('googleplus', 'education-academia'),
            'section'    => 'educationacademia_social',
            'description' => __( 'Icons will not show if left blank. Enter your social media link(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_google',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );


/*courses settings*/
$wp_customize->add_section( 'educationacademia_courses' ,
array(
    'title'      => esc_html__('Our Courses', 'education-academia'),
    'priority'   => 1,
    ) 
);

    $wp_customize->add_setting('educationacademia_courses_display',array(
        'default' => 'true',
        'sanitize_callback' => 'educationacademia_sanitize_checkbox'
    ));
    $wp_customize->add_control('educationacademia_courses_display',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide courses section','education-academia'),
        'description' => __('Image Size ( 1400px x 800px )','education-academia'),
        'section' => 'educationacademia_courses',
    ));
$wp_customize->add_setting(
    'educationacademia_course1',
    array(
        'default'     => '',
        'description' => __( 'Enter your courses page link(URL. Courses will not appear if title is left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );


$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_course1',
        array(
            'label'      => esc_html__('Course 1 link', 'education-academia'),
            'section'    => 'educationacademia_courses',
            'description' => __( 'Courses will not appear if title is left blank.(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_course1',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );
$wp_customize->add_setting( 'course_title1', array(
    'type'              => 'theme_mod',
    'sanitize_callback' => 'sanitize_text_field',
    ) );

$wp_customize->add_control( 'course_title1', array(
    'label'    => __( "course title 1", 'education-academia' ),
    'section'    => 'educationacademia_courses',
    'settings'  => 'course_title1',
    'type'     => 'text',
    'priority'   => 99
    ) );

$wp_customize->add_setting(
    'educationacademia_course2',
    array(
        'default'     => '',
        'description' => __( 'Enter your courses page link(URL. Courses will not appear if title is left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );


$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_course2',
        array(
            'label'      => esc_html__('Course 2 link', 'education-academia'),
            'section'    => 'educationacademia_courses',
            'description' => __( 'Courses will not appear if title is left blank.(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_course2',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );
$wp_customize->add_setting( 'course_title2', array(
    'type'              => 'theme_mod',
    'sanitize_callback' => 'sanitize_text_field',
    ) );

$wp_customize->add_control( 'course_title2', array(
    'label'    => __( "course title 2", 'education-academia' ),
    'section'    => 'educationacademia_courses',
    'settings'  => 'course_title2',
    'type'     => 'text',
    'priority'   => 99
    ) );

$wp_customize->add_setting(
    'educationacademia_course3',
    array(
        'default'     => '',
        'description' => __( 'Enter your courses page link(URL. Courses will not appear if title is left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_course3',
        array(
            'label'      => esc_html__('Course 3 link', 'education-academia'),
            'section'    => 'educationacademia_courses',
            'description' => __( 'Courses will not appear if title is left blank.(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_course3',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );
$wp_customize->add_setting( 'course_title3', array(
    'type'              => 'theme_mod',
    'sanitize_callback' => 'sanitize_text_field',
    ) );

$wp_customize->add_control( 'course_title3', array(
    'label'    => __( "course title 3", 'education-academia' ),
    'section'    => 'educationacademia_courses',
    'settings'  => 'course_title3',
    'type'     => 'text',
    'priority'   => 99
    ) );

$wp_customize->add_setting(
    'educationacademia_course4',
    array(
        'default'     => '',
        'description' => __( 'Enter your courses page link(URL. Courses will not appear if title is left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_course4',
        array(
            'label'      => esc_html__('Course 4 link', 'education-academia'),
            'section'    => 'educationacademia_courses',
            'description' => __( 'Courses will not appear if title is left blank.(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_course4',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );
$wp_customize->add_setting( 'course_title4', array(
    'type'              => 'theme_mod',
    'sanitize_callback' => 'sanitize_text_field',
    ) );

$wp_customize->add_control( 'course_title4', array(
    'label'    => __( "course title 1", 'education-academia' ),
    'section'    => 'educationacademia_courses',
    'settings'  => 'course_title4',
    'type'     => 'text',
    'priority'   => 99
    ) );
$wp_customize->add_setting(
    'educationacademia_course5',
    array(
        'default'     => '',
        'description' => __( 'Enter your courses page link(URL. Courses will not appear if title is left blank.', 'education-academia' ),
        'sanitize_callback' => 'esc_url_raw'
        )
    );
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'educationacademia_course5',
        array(
            'label'      => esc_html__('Course 5 link', 'education-academia'),
            'section'    => 'educationacademia_courses',
            'description' => __( 'Courses will not appear if title is left blank.(URL). . For example http://google.com/', 'education-academia' ),
            'settings'   => 'educationacademia_course5',
            'type'       => 'url',
            'priority'   => 99
            )
        )
    );
$wp_customize->add_setting( 'course_title5', array(
    'type'              => 'theme_mod',
    'sanitize_callback' => 'sanitize_text_field',
    ) );

$wp_customize->add_control( 'course_title5', array(
    'label'    => __( "course title 5", 'education-academia' ),
    'section'    => 'educationacademia_courses',
    'settings'  => 'course_title5',
    'type'     => 'text',
    'priority'   => 99
    ) );

}
add_action( 'customize_register', 'educationacademia_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function educationacademia_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function educationacademia_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function educationacademia_customize_preview_js() {
	wp_enqueue_script( 'educationacademia-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'educationacademia_customize_preview_js' );
