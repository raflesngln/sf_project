<?php
class dynamic_menu{

    function __construct()
    {
        $CI =& get_instance();      
        //$this->load->database();
        $this->db= $CI->load->database('default', TRUE);
    }

    
public function getMenu($parent=0,$hasil){
    $CI =& get_instance();
    $id_group =  $CI->session->userdata('idgroup_user');
    // $parent = $CI->session->userdata('parent');

	$w = $this->db->query("select a.pid,b.id_menu,b.title,b.url,b.parent,b.has_child,b.is_parent,c.GroupName,c.pid as id_group from tr_role_account a
			inner join dyn_menu b on a.id_menu=b.id_menu 
			inner join ms_group_account c on c.pid=a.id_group
			where b.parent='$parent' AND c.pid='$id_group' ORDER BY b.id_menu asc");
	if(($w->num_rows())>0)
	{
		$hasil .= '';
	}
	foreach($w->result() as $h){
		if($h->has_child=='0'){
			$hasil .= '<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
			<a href="'.base_url().$h->url.'" class="m-menu__link ">
			<i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">'.$h->title.'</span>
			</a>
			<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">';
		} else{
			$hasil .= '<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="'.base_url().$h->url.'" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">'.$h->title.'</span><i
				 class="m-menu__ver-arrow la la-angle-right"></i></a>
			<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">';
		}


						$hasil = $this->getMenu($h->id_menu,$hasil);

		$hasil .= "</li></ul></div>";
	}
	
	if(($w->num_rows)>0){
		$hasil .= "";
	}
	return $hasil;
} 

public function my_menu(){ 
    echo $this->getMenu(0,$h="");
}

}