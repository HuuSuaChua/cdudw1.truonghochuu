<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
public function home()
{
	return view("public.home");
}
public function welcome()
{
	return view("public.welcome");
}
public function user()
{
	return view("public.user");
}
public function index()
{
	return view("index");
}
public function show()
{
	return view("user.show");
}
public function edit($id)
{
    return view('user.edit',['userid' => $id]);
}


public function list($page=3)
{
	$title="Danh sách";
	$data = ["name"=>"Thuận Lợi","lop"=>"CCQ2111A"];
	return view("user.list",compact("title","data"));
}


}
