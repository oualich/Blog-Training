<?php
use App\Post;
use App\User;
use App\Role;
use App\Country;
use App\Photo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('/', function () {

//      return view('welcome');

//  });

// Route::get('/about', function () {

//     return " Hi about page";

// });


// Route::get('/contact', function () {

//     return " hi mi contact";

// });

// Route::get('/post/{id}/{name} ', function ($id, $name) {

//     return "this is post number " . $id . " " . $name;

// });

// Route::get('admin/posts/example', array ( 'as'=>'admin.home', function(){
//     $url = route('admin.home');
//     return "this url is ". $url;

// }));
//Route::get('/post/{id}', 'Postscontroller@index');

//Route::resource('/posts', 'Postscontroller');

//Route::get('/contact', 'Postscontroller@contact'); 

//Route::get('post/{id}/{name}/{passeword}', 'Postscontroller@show_post'); 

//Route::get('post/{id}', 'Postscontroller@show_post'); 

//   Route::get('/contact', function () {

//      return view('contact');

//   });

/*
|--------------------------------------------------------------------------
| application Routes
|--------------------------------------------------------------------------
 */
// Route::get('/insert', 'Postscontroller@insert');


/*
|--------------------------------------------------------------------------
| database raw sql 
|--------------------------------------------------------------------------
 */
// use Illuminate\Support\Facades\DB;


//   Route::get('/insert', function(){
    
//       DB::insert('insert into posts(title, content) values(2,2)', ['laravel with laravel', 'laravel is the best thing having']);

//   });

// Route::get('/read', function(){

//     $results = DB::select('select * from posts where id = 1', [1]);
//         return var_dump($results);
//         foreach($results as $post){
//             return "article . $post->title";
//         }
// }) ;

// Route::get('/update', function() {
//     $updated = DB::update('update posts set title = "UPDATE title" where id=1', [1]);
//     return "article a jour . $updated";

// });

// Route::get('/delete', function (){
// $deleted = DB::delete('delete from posts where id =1', [1]);
// return "supprimer.$deleted";
// });


/*
--------------------------------------------------
| ELOQUENT
--------------------------------------------------
 */


//  Route::get('/find', function(){
    //  UN
    // $post = Post::all();
    //  return $post;

     // DEUX
    //  $post = Post::all();

    //  foreach($post as $post){

    //      return $post->title;

    //  }
    // TROIs
//     $post = Post::find(2);
//     return $post->title;
//  });

// Route::get('/findwhere', function(){
// $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
// return $posts;
// });

// Route::get('/findmore',function(){

//     // $posts = Post::findOrFail(1);
//     // return $posts;
// $posts = Post::where('users_count','<', 50)->firstOrFail(1);
// return $posts;
// });

// Route::get('/basicinsert',function(){
// $post = new Post;
// $post->title = 'New eloquent title insert';
// $post->content = 'Wow eloquent is really cool,look at this content';
// $post->save();
// });
// Route::get('/basicinsert2',function(){
//     $post = Post::find(2);
//     $post->title = 'New eloquent title insert 2';
//     $post->content = 'Wow eloquent is really cool,look at this content 2';
//     $post->save();
//     });
Route::get('/create', function () {

    Post::create(['title'=>'the create title', 'content'=>'the content create']);

});

// Route::get('/update', function () {
//     Post::where('id', 2)->where('is_admin',0)->update(['title'=>'New PHP title','content'=>'New PHP content']);
// });

Route::get('/delete', function(){
    $post = Post::find(4);
    $post->delete();
});

// Route::get('/delete2', function(){
// Post::destroy([3,1]);
// Post::where('is_admin', 0)->delete();
// });

// Route::get('softdelete',function(){

//     Post::find(10)->delete();
// });

// Route::get('/readsoftdelete', function(){
//     $post = Post::withTrashed()->where('is_admin', 0)->get(); 
//     // $post = Post::onlyTrashed()->where('is_admin', 0)->get(); 

//     return $post;
// });

// Route::get('/restore', function(){

//     Post::withTrashed()->where('is_Admin', 0)->restore();

// }); 

// Route::get('/forcedelete', function(){

//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();

// });


/*
|--------------------------------------------------------------------------
| Eloquent One to One relationship
|--------------------------------------------------------------------------
 */
// One to One relationship

// Route::get('/user/{id}/post', function($id){
//     $title  = User::find($id)->post->title;
//     $content = User::find($id)->post->content;
//     return $content . " " . $title . $id;

// });
// reverse One to One relationship
// Route::get('/post/{id}/user', function($id){
//     $profil = Post::find($id)->user->name;
//     return $profil;
// });

/*
|--------------------------------------------------------------------------
| Eloquent One to Many relationship
|--------------------------------------------------------------------------
 */

//  Route::get('/posts', function () {
//      $user = User::find(1);
//      foreach($user->posts as $post){
//         echo $post->title . "<br>";
//      }
//  });

/*
|--------------------------------------------------------------------------
| Eloquent Many to Many relationship
|--------------------------------------------------------------------------
 */

// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id)->roles()->orderBy('id','desc')->get();


//     return $user;
    // foreach($user->roles as $role){
    //  echo $role->name;
    // }
// });



/*
|--------------------------------------------------------------------------
| acces   intermiate table / pivot
|--------------------------------------------------------------------------
 */
// Route::get('user/pivot', function(){

//     $user = User::find(1);
   
//     foreach($user->roles as $role){
   
//         return $role->pivot->created_at;
   
//     }

// });
/*
|--------------------------------------------------------------------------
| many through
|--------------------------------------------------------------------------
 */
// Route::get('/user/country', function(){

//  $country =   Country::find(1);
// foreach($country->posts as $post){
//     return $post->title;
// }

// });




/*
|--------------------------------------------------------------------------
| Polymorhpic relation
|--------------------------------------------------------------------------
 */
// Route::get('user/photos', function(){
//     $user = User::find(1);
//         foreach($user->photos as $photo){
//         return $photo->path;
//            // return $photo ;
//         }

// });

// Route::get('post/{id}/photos', function($id){
//     $post = post::find($id);
//         foreach($post->photos as $photo){
//         echo $photo->path . '<br>';
//            // return $photo ;
//         }

// });

Route::get('photo/{id}/', function($id){

    $photo = Photo::findOrFail($id);
    $imageable = $photo->path->imageable_id;
    return $imageable;
});




 /*
|--------------------------------------------------------------------------
| application route
|--------------------------------------------------------------------------
 */

Route::group(['middleware' => ['web']], function () {


}); 

