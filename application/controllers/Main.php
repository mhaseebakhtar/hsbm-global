<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
        parent::__construct();
	}

	public function index() {
		$data['title'] = 'HSBM Global';
		$data['page'] = 'index';

		$data['recent'] = $this->handler->getRows(array('conditions' => array('status' => 1), 'order' => 'created_at', 'direction' => 'desc', 'limit' => 3), 'blogs');

		$this->load->view('template', $data);
	}

	public function template($page) {
		$data['title'] = ucwords(str_replace('-', ' ', $page)) . ' | HSBM Global';
		$data['page'] = $page;

		$this->load->view('template', $data);
	}

	public function blogs($categorySlug = NULL) {
		$data['title'] = 'Blogs | HSBM Global';
		$data['page'] = 'blogs';

		$limit = 5;

		$conditions = array('status' => 1);
		if ($categorySlug == NULL) {
			$page = ($this->uri->segment(2)) ? ($this->uri->segment(2) - 1) : 0;
		} else{
			$page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
			$category = $this->handler->getRecordByCol('slug', $categorySlug, 'blog_categories');

			if (!$category || !$category->status) {
				show_404();
			}
			
			$conditions['category'] = $category->id;
		}

		$total = $this->handler->getTotalCount('blogs', $conditions);
		$data['blogs'] = $this->handler->get($limit, $page * $limit, 'blogs', $conditions, 'id desc');
		if ($total) {
			$base_url = ($categorySlug == NULL) ? base_url('blogs') : base_url("blogs/$categorySlug");
			// custom paging configuration
			$config = $this->handler->customPagination($base_url, $total, $limit, $categorySlug, true);

			$this->pagination->initialize($config);

			// build paging links
			$data["links"] = $this->pagination->create_links();
		}

		$data['slug'] = $categorySlug;
		$data['categories'] = $this->handler->getRows(array('conditions' => array('status' => 1)), 'blog_categories');

		$this->load->view('template', $data);
	}

	public function blog($categorySlug, $blogSlug) {
		$category = $this->handler->getRecordByCol('slug', $categorySlug, 'blog_categories');
		$blog = $this->handler->getRecordByCol('slug', $blogSlug, 'blogs');

		if (!$category || !$category->status || !$blog || !$blog->status) {
			show_404();
		}
		
		$data['title'] = "{$blog->title} | {$category->name} | HSBM Global";
		$data['page'] = 'blog';

		
		$data['categorySlug'] = $categorySlug;
		$data['blogSlug'] = $blogSlug;
		$data['blog'] = $blog;
		$data['category'] = $category;

		$data['recent'] = $this->handler->getRows(array('conditions' => array('status' => 1, 'slug != ' => $blogSlug), 'order' => 'created_at', 'direction' => 'desc', 'limit' => 3), 'blogs');
		$data['categories'] = $this->handler->getRows(array('conditions' => array('status' => 1)), 'blog_categories');

		$this->load->view('template', $data);
	}
}
