<?php

namespace Wor\API;

use WP_REST_Server;
use WP_REST_Request;
use WP_REST_Response;
use WP_Query;
use WP_Error;

class Events {

	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
    $this->version = $version;
    $this->date_now = date('Y-m-d H:i:s');
  }
  
	public function upcomimng_events() {
    register_rest_route( 'slvr/v1', '/upcoming-events', [
      'methods'   => WP_REST_Server::READABLE,
      'callback'  => [$this, 'get_upcoming_events'],
      'args' => [
        'page' => [
          'required' => true,
          'validate_callback' => function($param, $request, $key) {
            return is_numeric($param) && preg_match('/^[1-9][0-9]*$/', $param);
          }
        ]
      ]
    ]);
  }

	public function past_events() {
    register_rest_route( 'slvr/v1', '/past-events', [
      'methods'   => WP_REST_Server::READABLE,
      'callback'  => [$this, 'get_past_events'],
      'args' => [
        'page' => [
          'required' => true,
          'validate_callback' => function($param, $request, $key) {
            return is_numeric($param) && preg_match('/^[1-9][0-9]*$/', $param);
          }
        ]
      ]
    ]);
  }

  public function get_upcoming_events(WP_REST_Request $request) {
    $page = $request['page'];

    $args = [
      'post_type'       => 'event',
      'posts_per_page'  => '3',
      'paged'           => $page,
      'meta_query' 		  => [
        'relation' 			=> 'AND',
        [
          'key'       => 'event_date',
          'compare'		=> '>',
          'value'			=> $this->date_now,
          'type'			=> 'DATETIME'
        ],
      ],
      'order'				  => 'ASC',
      'orderby'			  => 'meta_value',
      'meta_key'			=> 'event_date',
      'meta_type'			=> 'DATE'
    ];

    $query = new WP_Query( $args ); 
  
    if (empty($query->posts)) {
      return new WP_Error( 'no_posts', __('No events found'), array( 'status' => 404 ) );
    }

    $max_pages = $query->max_num_pages;
    $total = $query->found_posts;
    $posts = $query->posts;

    $data = array_map(function($post) {
      return [
        'id'    => $post->ID,
        'title' => $post->post_title,
        'city'  => get_field('event_city', $post->ID),
        'date'  => get_field('event_date', $post->ID),
      ];
    }, $posts);

    $response = new WP_REST_Response($data, 200);
    $response->header( 'X-WP-Total', $total ); 
    $response->header( 'X-WP-TotalPages', $max_pages );

    return $response;
  }

  public function get_past_events(WP_REST_Request $request) {
    $page = $request['page'];

    $args = [
      'post_type'       => 'event',
      'posts_per_page'  => '6',
      'paged'           => $page,
      'meta_query' 		  => [
        'relation' 			=> 'AND',
        [
          'key'       => 'event_date',
          'compare'		=> '<',
          'value'			=> $this->date_now,
          'type'			=> 'DATETIME'
        ],
        [
          'key'       => 'event_report',
          'compare'   => '=',
          'value'     => '1'
        ]
      ],
      'order'				  => 'ASC',
      'orderby'			  => 'meta_value',
      'meta_key'			=> 'event_date',
      'meta_type'			=> 'DATE'
    ];

    $query = new WP_Query( $args ); 
  
    if (empty($query->posts)) {
      return new WP_Error( 'no_posts', __('No events found'), array( 'status' => 404 ) );
    }

    $max_pages = $query->max_num_pages;
    $total = $query->found_posts;
    $posts = $query->posts;

    $data = array_map(function($post) {
      return [
        'id'    => $post->ID,
        'title' => $post->post_title,
        'url'   => get_the_permalink($post->ID),
        'image' => get_the_post_thumbnail_url($post->ID, 'card-thumb'),
        'city'  => get_field('event_city', $post->ID),
        'date'  => get_field('event_date', $post->ID),
      ];
    }, $posts);

    $response = new WP_REST_Response($data, 200);
    $response->header( 'X-WP-Total', $total ); 
    $response->header( 'X-WP-TotalPages', $max_pages );

    return $response;
  }
}
