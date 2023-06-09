<?php
function shopient_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'shopient'),
		) 
	);
	/*=========================================
	Storely Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','shopient'),
			'panel'  		=> 'header_section',
		)
    );
	
	/*=========================================
	Header Navigation
	=========================================*/	
	$wp_customize->add_section(
        'header_navigation',
        array(
        	'priority'      => 4,
            'title' 		=> __('Header Navigation','shopient'),
			'panel'  		=> 'header_section',
		)
    );
	
	
	// My Account
	$wp_customize->add_setting(
		'hdr_nav_account'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_account',
		array(
			'type' => 'hidden',
			'label' => __('My Account','shopient'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_account' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 4,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_account', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'shopient' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	//  Sign In Title
	$wp_customize->add_setting( 
		'hdr_account_ttl' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_html',
			'priority' => 4,
		) 
	);
	
	$wp_customize->add_control(
	'hdr_account_ttl', 
		array(
			'label'	      => esc_html__( 'Sign In Title', 'shopient' ),
			'section'     => 'header_navigation',
			'type'        => 'text'
		) 
	);
	
	//  Sign Out Title
	$wp_customize->add_setting( 
		'hdr_account_singout_ttl' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_html',
			'priority' => 4,
		) 
	);
	
	$wp_customize->add_control(
	'hdr_account_singout_ttl', 
		array(
			'label'	      => esc_html__( 'Sign Out Title', 'shopient' ),
			'section'     => 'header_navigation',
			'type'        => 'text'
		) 
	);	
	
	
	// Cart
	$wp_customize->add_setting(
		'hdr_nav_cart'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_cart',
		array(
			'type' => 'hidden',
			'label' => __('Cart','shopient'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_cart' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 8,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_cart', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'shopient' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	

	//  Title
	$wp_customize->add_setting( 
		'hdr_cart_ttl' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_html',
			'priority' => 8,
		) 
	);
	
	$wp_customize->add_control(
	'hdr_cart_ttl', 
		array(
			'label'	      => esc_html__( 'Cart Title', 'shopient' ),
			'section'     => 'header_navigation',
			'type'        => 'text'
		) 
	);	
	/*=========================================
	Browse Section
	=========================================*/	
	$wp_customize->add_section(
        'header_browse',
        array(
        	'priority'      => 4,
            'title' 		=> __('Browse Section','shopient'),
			'panel'  		=> 'header_section',
		)
    );
	
	// Browse Category
	$wp_customize->add_setting(
		'browse_cat_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'browse_cat_head',
		array(
			'type' => 'hidden',
			'label' => __('Browse Category','shopient'),
			'section' => 'header_browse',
		)
	);
	
	// Hide / Show 
	$wp_customize->add_setting( 
		'hs_browse_cat' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_browse_cat', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'shopient' ),
			'section'     => 'header_browse',
			'type'        => 'checkbox'
		) 
	);
	
	// Title
	$wp_customize->add_setting( 
		'browse_cat_ttl', 
			array(
			'default' => '',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_html',
			'priority' => 3,
		) 
	);
	
	$wp_customize->add_control(
	'browse_cat_ttl', 
		array(
			'label'	      => esc_html__( 'Title', 'shopient' ),
			'section'     => 'header_browse',
			'type'        => 'text'
		) 
	);	
	
	
	// Search
	$wp_customize->add_setting(
		'product_search_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'product_search_head',
		array(
			'type' => 'hidden',
			'label' => __('Product Search','shopient'),
			'section' => 'header_browse',
		)
	);
	
	// Hide / Show 
	$wp_customize->add_setting( 
		'hs_product_search' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 5,
		) 
	);
	
	$wp_customize->add_control(
	'hs_product_search', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'shopient' ),
			'section'     => 'header_browse',
			'type'        => 'checkbox'
		) 
	);
	
	
	
	/*=========================================
	Sticky Header
	=========================================*/	
	$wp_customize->add_section(
        'sticky_header_setting',
        array(
        	'priority'      => 4,
            'title' 		=> __('Sticky Header','shopient'),
			'panel'  		=> 'header_section',
		)
    );
	
	// Heading
	$wp_customize->add_setting(
		'sticky_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'sticky_head',
		array(
			'type' => 'hidden',
			'label' => __('Sticky Header','shopient'),
			'section' => 'sticky_header_setting',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_sticky' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_sticky', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'shopient' ),
			'section'     => 'sticky_header_setting',
			'type'        => 'checkbox'
		) 
	);	
}
add_action( 'customize_register', 'shopient_header_settings',999 );