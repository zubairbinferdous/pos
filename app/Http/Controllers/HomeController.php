<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    // all-product-part

    public function allProduct()
    {
        return view('allProduct');
    }

    public function addProduct()
    {
        return view('addproduct');
    }

    // employee-part



    public function addEmployee()
    {
        return view('addemployee');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'phone' => 'required',
            'salary' => 'required',
            'photo' => 'required',
        ]);
        $data = [];
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['salary'] = $request->salary;
        $image = $request->file('photo');

        if ($image) {
            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/employee/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['photo'] = $image_url;
                $employee = DB::table('employees')->insert($data);
                if ($employee) {
                    $notification = [
                        'messege' => 'Successfully Employee Inserted ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->route('addEmployee')
                        ->with($notification);
                } else {
                    $notification = [
                        'messege' => 'error ',
                        'alert-type' => 'success',
                    ];
                    return Redirect()
                        ->back()
                        ->with($notification);
                }
            } else {
                return Redirect()->back();
            }
        } else {
            return Redirect()->back();
        }
    }


    public function allEmployee()
    {
        $employees=Employee::all();
        return view('allemployee', compact('employees'));
    }




    // Category-part

    public function allCategory()
    {   
        $categorys=DB::table('categorys')->get();
        return view('allcategory',compact('categorys'));
    }




    public function addCategory()
    {
        return view('addcategory');
    }


    public function category(Request $request)
    {

        $data = array();
        $data['name'] = $request->name;
        $cat=DB::table('categorys')->insert($data);

        if ($cat) {
                 $notification=array(
                 'messege'=>'Successfully Category Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             } 
    
    }






}
