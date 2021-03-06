<?php

class Pagination
{
	private $arr = array();
	public $pag_url;
	
	public function __construct()
	{
	}
	public function Show()
	{
		$str = '<nav>';
		$str .= '<div class="dataTables_info">Page '.$this->arr['current'].' of '.$this->arr['last'].'</div>';
		$str .= ' <ul class="pagination">';
		
		if(intval($this->arr['current']) > 0)
		{
			if(1 != $this->arr['current'])
				$str .= '<li><a href="'.$this->pag_url.'1" class="first paginate_button">First</a></li>'; 
			if($this->arr['previous'] != $this->arr['current'])
				$str .= '<li><a href="'.$this->pag_url.$this->arr['previous'].'" class="previous paginate_button">Previous</a></li>';
			//$str .= '<span>';
			foreach($this->arr['pages'] as $rp)
			{
				if($this->arr['current'] == $rp)
					$str .= '<li class="active"><a href="#" class="paginate_active">'.$rp.'</a><li>'; 
				else
					$str .= '<li><a href="'.$this->pag_url.$rp.'" class="paginate_button">'.$rp.'</a></li>'; 
			}
			//$str .= '</span>';
			if($this->arr['next'] != $this->arr['current'])
				$str .= '<li><a href="'.$this->pag_url.$this->arr['next'].'" class="next paginate_button">Next</a></li>'; 
						
			if($this->arr['last'] != $this->arr['current'])
				$str .= '<li><a href="'.$this->pag_url.$this->arr['last'].'" class="last paginate_button">Last</a><li>';
		}
		$str .= '</ul>'.'</nav>';
		return $str;
	}
	public function calculate_pages($total_rows, $rows_per_page, $page_num)
	{
		// calculate last page
		$last_page = ceil($total_rows / $rows_per_page);
		// make sure we are within limits
		$page_num = (int) $page_num;
		if ($page_num < 1)
		{
		   $page_num = 1;
		} 
		elseif ($page_num > $last_page)
		{
		   $page_num = $last_page;
		}
		$upto = ($page_num - 1) * $rows_per_page;
		$this->arr['limit'] = 'LIMIT '.$upto.',' .$rows_per_page;
		$this->arr['current'] = $page_num;
		if ($page_num == 1)
			$this->arr['previous'] = $page_num;
		else
			$this->arr['previous'] = $page_num - 1;
		if ($page_num == $last_page)
			$this->arr['next'] = $last_page;
		else
			$this->arr['next'] = $page_num + 1;
		$this->arr['last'] = $last_page;
		$this->arr['info'] = 'Page ('.$page_num.' of '.$last_page.')';
		$this->arr['pages'] = $this->get_surrounding_pages($page_num, $last_page, $this->arr['next']);
		return $this->arr;
	}
	function get_surrounding_pages($page_num, $last_page, $next)
	{
		$arr = array();
		$show = 5; // how many boxes
		// at first
		if ($page_num == 1)
		{
			// case of 1 page only
			if ($next == $page_num) return array(1);
			for ($i = 0; $i < $show; $i++)
			{
				if ($i == $last_page) break;
				array_push($arr, $i + 1);
			}
			return $arr;
		}
		// at last
		if ($page_num == $last_page)
		{
			$start = $last_page - $show;
			if ($start < 1) $start = 0;
			for ($i = $start; $i < $last_page; $i++)
			{
				array_push($arr, $i + 1);
			}
			return $arr;
		}
		// at middle
		$start = $page_num - $show;
		if ($start < 1) $start = 0;
		for ($i = $start; $i < $page_num; $i++)
		{
			array_push($arr, $i + 1);
		}
		for ($i = ($page_num + 1); $i < ($page_num + $show); $i++)
		{
			if ($i == ($last_page + 1)) break;
			array_push($arr, $i);
		}
		return $arr;
	}
}
?>