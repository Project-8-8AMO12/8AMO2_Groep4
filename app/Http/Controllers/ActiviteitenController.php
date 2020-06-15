<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiviteitenController extends Controller
{
    public function index(){
        $activiteitinfo = [];
        return view('activiteiten',
            [
                'title' => 'Activiteiten',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam aspernatur culpa deleniti eum exercitationem fugiat harum id ipsa libero nam officia omnis quia sapiente similique totam, vel, velit voluptate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem commodi consequuntur cupiditate dignissimos distinctio doloremque doloribus enim explicabo hic laborum minima natus, nobis nostrum provident quidem quis ullam? Quia! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut impedit in necessitatibus officia quaerat saepe temporibus veritatis vitae! Aut delectus deserunt obcaecati, perferendis quam sapiente unde voluptas. Nam, nulla, voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequuntur delectus doloremque doloribus incidunt inventore molestias quasi. Delectus eligendi molestias nulla. Aliquid assumenda debitis nam praesentium sit voluptas voluptates voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, amet ipsa obcaecati odit pariatur ratione sequi. Aut, laboriosam, nihil! Consequuntur, corporis explicabo neque obcaecati quisquam recusandae sequi sit soluta vel?'
            ]);
    }
}
