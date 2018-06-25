<?php
use Illuminate\Http\Request;
use App\Http\Requests;
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

Route::get('/', function () {
       return view('tasks', [
            'tasks' => \App\Task::orderBy('created_at', 'asc')->get()
        ]);
    });


Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
		
        $task = new \App\Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    });
	
	
	    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        \App\Task::findOrFail($id)->delete();

        return redirect('/');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory']);
Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);


/*    marcas */

Route::group(['prefix' => 'admin'], function () {
    Route::get('/marcas', ['uses'=>'MarkController@MarkForm']);
	Route::post('/marcas', ['uses'=>'MarkController@MarkFormAdd']);	 
	Route::get('/dashboard', ['uses'=>'MarkController@dashboard']);
});

  
       
	