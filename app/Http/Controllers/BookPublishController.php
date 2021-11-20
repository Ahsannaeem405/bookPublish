<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class BookPublishController extends Controller
{
    public function index()
    {
        $user['authors']=User::where('role','author')->get();
        $user['designer']=User::where('role','designer')->get();
        return view('admin.welcome',$user);
    }
    public function authors()
    {
        $user['authors']=User::where('role','author')->get();
        return view('admin.author',$user);
    }
    public function add_authors(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'number' => 'required',
        //     'password' => 'required|min:8',
        //     'c_password' => 'required_with:password|same:new_password|min:8'          
        // ]);        
       
       
        if($request->password == $request->c_password)
        {
        

            $authors=new User();
            $authors->name=$request->name;
            $authors->email=$request->email;
            $authors->number=$request->number;
            $authors->role='author';
            $authors->password=Hash::make($request->password);
            $authors->save(); 
            return redirect()->back()->with('message_success','Authors has been inserted Successfully!');
        }else{
            
            return redirect()->back()->with('message_error','Password does not match'); 

        }
    }
    public function update_authors(Request $request,$id)
    {
       
       // dd($request->input());
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'number' => 'required',
        //     'password' => 'required|min:8',
        //     'c_password' => 'required_with:password|same:new_password|min:8'          
        // ]);        
       
        $authors=User::find($id);
        $authors->name=$request->name;
        $authors->email=$request->email;
        $authors->number=$request->number;
        $authors->role='author';
        $authors->password=Hash::make($request->password);
        $authors->save(); 
        return redirect()->back()->with('message_success','Authors has been Updated Successfully!');
        
    }
    public function delete_authors(Request $request,$id)
    {
        $authors=User::find($id);
        $authors->delete();
        return redirect()->back()->with('message_error','Author has been deleted!'); 
    }
    public function Designers()
    {
        $user['designer']=User::where('role','designer')->get();
        return view('admin.designer',$user);
    }
    public function add_Designers(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'number' => 'required',
        //     'password' => 'required|min:8',
        //     'c_password' => 'required_with:password|same:new_password|min:8'          
        // ]);        
       
       
        if($request->password == $request->c_password)
        {
            $Designers=new User();
            $Designers->name=$request->name;
            $Designers->email=$request->email;
            $Designers->number=$request->number;
            $Designers->role='designer';
            $Designers->password=Hash::make($request->password);
            $Designers->save(); 
            return redirect()->back()->with('message_success','Designers has been inserted Successfully!');
        }else{
            
            return redirect()->back()->with('message_error','Password does not match'); 

        }
    }
    public function update_Designers(Request $request,$id)
    {
       
       // dd($request->input());
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'number' => 'required',
        //     'password' => 'required|min:8',
        //     'c_password' => 'required_with:password|same:new_password|min:8'          
        // ]);        
       
        $Designers=User::find($id);
        $Designers->name=$request->name;
        $Designers->email=$request->email;
        $Designers->number=$request->number;
        $Designers->role='designer';
        $Designers->password=Hash::make($request->password);
        $Designers->save(); 
        return redirect()->back()->with('message_success','Designers has been Updated Successfully!');
        
    }
    public function delete_Designers(Request $request,$id)
    {
        $Designers=User::find($id);
        $Designers->delete();
        return redirect()->back()->with('message_error','Designers has been deleted!'); 
    }
    public function add_book(Request $request)
    {
        //dd($request->input());
        $author_id=Auth::user()->id;

        $books=new Book();
        $books->user_id=$author_id;
        $books->b_title=$request->b_title;
        $books->b_paper=$request->b_paper;
        $books->b_type=$request->b_type;
        $books->b_p_type=$request->b_p_type;
        $books->b_color=$request->b_color;
        $books->b_num_copy=$request->b_num_copy;
        $books->designer=$request->designer;
        if(isset($request->b_file))
        {
        $image=$request->file('b_file');
        $imageName = $image->getClientOriginalName();
        $books->b_file=$imageName;
        $path=$image->move(public_path('books'),$imageName);            
        }
        $books->save();
        return redirect()->back()->with('message_success','Book has been Added!'); 

    }
    public function profile()
    {
        $user['user_data']=Auth::user();

        // dd($user['user_data']);
        return view('admin.profile',$user);
    }

    public function update_profile(Request $request)
    {
 

         //dd($request->input());
      
        $user = User::find(Auth::user()->id);
  
      if(isset($request->old_password))
      {
         $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8',
            'c_password' => 'required_with:password|same:password|min:8'
               
        ]);
       
        if(Hash::check($request->old_password,$user->password)) { 
           
                //$user->password= Hash::make($request->password);
                //$user->save();
                $user->update([
                    'password' => Hash::make($request->password),
                ]);
        return redirect()->back()->with('message_success','Profile has been Updated!'); 

        }else{

            return redirect()->back()->with('message_error','Your Password does not match!'); 


        }
      }else{
        if(isset($request->image))
        {
        $image=$request->file('image');
        $imageName = $image->getClientOriginalName();
        $user->update([
            'image' => $imageName,
        ]);
        $path=$image->move(public_path('profile'),$imageName);            
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
       
        ]);


        return redirect()->back()->with('message_success','Your Profile has been updated!'); 

      }
      return redirect()->back()->with('message_success','Your Profile has been updated!');
    }
    public function authors_mybooks()
    {
 
        $author_id=Auth::user()->id;
        $author_book['mybook']=Book::where('user_id',$author_id)->get();
        return view(' admin.mybooks', $author_book);
    }
   
    public function delete_mybooks(Request $request,$id)
    {

        $delete_mybooks=Book::find($id);
        $delete_mybooks->delete();
        return redirect()->back()->with('message_error','Book has been deleted!'); 
    }

    public function books(Request $request)
    {

        $designer_id=Auth::user()->id;
        $designer_book['mybook']=Book::get();
 
        return view(' admin.books', $designer_book);
    }
    ///////////////////////designer_book///////////////////////////////////
    public function designer_book(Request $request)
    {

        $designer_id=Auth::user()->id;
        $designer_book['mybook']=Book::where('designer',$designer_id)->get();
 
        return view(' admin.designer_book', $designer_book);
    }
    public function designer_waiting_book(Request $request)
    {

        $designer_id=Auth::user()->id;
        $designer_book['mybook']=Book::where('designer',$designer_id)->get();
 
        return view(' admin.designer_waiting_book', $designer_book);
    }
    
    public function add_design(Request $request)
    {
        //
        dd($request->input());
       // dd($request->img);
       $id=$request->data;
        $image=Book::find($id);
        if($request->hasFile('img'))
        {
            
        $file=$request->file('img');
        
        $imageName = $file->getClientOriginalName();
        //dd($imageName);
        $image->design_image=$imageName;
        // $image->update([
        //     'design_image' => $imageName,
        // ]);
        $path=$file->move(public_path('design'),$imageName); 
        $image->save();
        }
        return redirect()->back()->with('message_success','Design has been Added!');            

    }
    public function approval_books(Request $request)
    {

        $designer_id=Auth::user()->id;
        $designer_book['mybook']=Book::get();
 
        return view(' admin.approval_books', $designer_book);
    }

    public function book_status_disapprove(Request $request ,$id)
    {
       //dd(1);
      $book_id=$id;
      $book_status = Book::find($book_id);
     $book_status->status='0';
     $book_status->update();
      return redirect()->back()->with('message_success','Book Inactive!'); 
    }
    public function book_status_approve(Request $request ,$id)
    {
       //dd(2);
       $book_id=$id;
       $book_status = Book::find($book_id);
      $book_status->status='1';
      $book_status->update();
      return redirect()->back()->with('message_success','Book active!'); 
    }
    
    ///////////////////////////end/////////////////////////////////////////
    public function pending_books(Request $request )
    {
        $designer_id=Auth::user()->id;
        $designer_book['mybook']=Book::where('status','')->get();
 
        return view(' admin.pending_books', $designer_book);
    }
    public function inactive_books(Request $request )
    {
        $designer_id=Auth::user()->id;
        $designer_book['mybook']=Book::where('status','0')->get();
 
        return view(' admin.inactive_books', $designer_book);
    }
    public function approve_books(Request $request )
    {
        $designer_id=Auth::user()->id;
        $designer_book['mybook']=Book::where('status','1')->get();
 
        return view(' admin.approve_books', $designer_book);
    }
}