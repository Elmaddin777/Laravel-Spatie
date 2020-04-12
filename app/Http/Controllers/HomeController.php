<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
// Include Spatie Models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
      // Create role
      //$role = Role::create(['name' => 'writer']);
      
      // Create permissions
      //$permission = Permission::create(['name' => 'write_post']);
      // $permission = Permission::create(['name' => 'edit_post']);
        
      // Assing permission to the role
      // $role = Role::findById('1');
      // $permission = Permission::findById('1');
      // 
      // $role->givePermissionTo($permission);
      // $permission->assignRole($role);
      
      // Assign role to a user
      //$user = User::find(1);
      //$user->assignRole($role);
      
      // Permissions inherited from the user's roles
      //return $user->getPermissionsViaRoles();
    
                
      /*$editor = Role::create(['name' => 'editor']);
      $publisher = Role::create(['name' => 'publisher']);
      $admin = Role::create(['name' => 'admin']);
      $writer = Role::findById(1);
      
      $publish_post = Permission::create(['name' => 'publish_post']);
      $edit_post = Permission::findById(2);
      
      $permissions = [$publish_post, $edit_post, $write_post];
      
      $writer->revokePermissionTo($edit_post);
      $editor->givePermissionTo($edit_post);
      $publisher->givePermissionTo($publish_post);
      $admin->syncPermissions($permissions);
      */
    /*  $roles = [
        'writer' => Role::findById(1),
        'editor' => Role::findById(2),
        'publisher' => Role::findById(3),
        'admin' => Role::findById(4)
      ];
      
      $users = [
        'admin' => User::find(1),
        'editor' => User::find(2),
        'publisher' => User::find(3),
        'writer' => User::find(4)
      ];
      
      $users['admin']->syncRoles($roles);
      $users['editor']->assignRole($roles['editor']);
      $users['publisher']->assignRole($roles['publisher']);
      $users['editor']->assignRole($roles['editor']);
      $users['writer']->assignRole($roles['writer']);
      */
      
      $data['posts'] = Post::all();
      return view('home', $data);
    }
    
    public function insertPost(){
      return view('insert');
    }
    
    
    
    public function editPost($id){
       $data['post'] = Post::find($id);
       return view('edit', $data);
    }
    
}
