<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Taskcontroller extends Controller
{
    public function uploadtask(Request $req){

        $validate = validator::make($req->only( 'task','description','status','start_at','end_at',),[

            'task'=>'required|string',
            'description'=>'required|string',
            'status'=>'required|string',
            'start_at'=>'required|string',
            'end_at'=>'required|string'
        ],[
            'start_at.required'=>'start date is required',
            'end_at.required'=>'end date is required'
        ]);

        if($validate->fails()){
            return response()->json([
                'status'=>400,
                'message'=> $validate->errors()
            ]);
        }else{


            $task = new task;
            $task->task = $req->task;
            $task->description = $req->description;
            $task->status = $req->status;
            $task->start_at = $req->start_at;
            $task->end_at = $req->end_at;

            $task->save();

            return response()->json([
                'status'=>200,
                'message'=> 'Task created successfully!'
            ]);


        }
    }

    public function taskfetch(){

        $tasks = DB::table('tasks')
                     ->where('status','=','Undone')
                     ->where('deleted','=',0)
                     ->get();

        if(count($tasks) > 0){
            return response()->json([
                'task'=> $tasks
            ]);
        }else{
            return response()->json([
                'task'=> $tasks
            ]);
        }
    }

    public function taskview($id){
      
        
        $tasks = DB::table('tasks')
        ->where('id','=',$id)
        ->get();

        if(count($tasks) > 0){
            return response()->json([
                'status'=>200,
                 'task'=> $tasks
            ]);
        }

    }

    public function taskupdate(Request  $req){

        
        $validate = validator::make($req->only('id','mode'),[
            'id'=>'required|integer',
            'mode'=>'required|string'
        ]);



        if($validate->fails()){
            return response()->json([
                'status'=>400,
                'message'=> $validate->errors()
            ]);
        }else{

            if($req->mode === "completed"){

                task::where('id', $req->id)->update([
                   'status' => 'Completed'
                ]);

                return response()->json([
                    'status'=>200,
                    'message'=> 'Task updated successfully!'
                ]);
            }

            if($req->mode === "progress"){
                task::where('id', $req->id)->update([
                    'status' => 'Progress'
                 ]);

                 return response()->json([
                    'status'=>200,
                    'message'=> 'Task updated successfully!'
                ]);
            }

            if($req->mode === "block"){
                task::where('id', $req->id)->update([
                    'status' => 'Blocked'
                 ]);

                 return response()->json([
                    'status'=>200,
                    'message'=> 'Task updated successfully!'
                ]);
            }

            if($req->mode === "delete"){
                task::where('id', $req->id)->update([
                    'deleted' => '1'
                 ]);

                 return response()->json([
                    'status'=>200,
                    'message'=> 'Task updated successfully!'
                ]);
            }

          

         


        }
    }

    public function taskgetedit($id){
        $tasks = DB::table('tasks')
        ->where('id','=',$id)
        ->get();

        if(count($tasks) > 0){
            return response()->json([
                'status'=>200,
                 'task'=> $tasks
            ]);
        }
    }

    public function taskedit(Request $req){
        $validate = validator::make($req->only( 'taskedit','descriptionedit','statusedit','start_atedit','end_atedit',),[

            'taskedit'=>'required|string',
            'descriptionedit'=>'required|string',
            'statusedit'=>'required|string',
            'start_atedit'=>'required|string',
            'end_atedit'=>'required|string'
        ],[
            'start_atedit.required'=>'start date is required',
            'end_atedit.required'=>'end date is required',
            'statusedit.required'=>'status is required',
            'descriptionedit.required'=>'description is required',
            'taskedit.required'=>'task title is required'
        ]);

        if($validate->fails()){
            return response()->json([
                'status'=>400,
                'message'=> $validate->errors()
            ]);
        }else{

            task::where('id', $req->id)->update([
                'task'=> $req->taskedit,
                'status' => $req->statusedit,
                'description' => $req->descriptionedit,
                'start_at' => $req->start_atedit,
                'end_at' => $req->end_atedit,
             ]);


            return response()->json([
                'status'=>200,
                'message'=> 'Task updated successfully!'
            ]);


        }
        

    }

    public function taskfetchprogress(){
        $tasks = DB::table('tasks')
        ->where('status','=','Progress')
        ->where('deleted','=',0)
        ->get();

        if(count($tasks) > 0){
        return response()->json([
        'task'=> $tasks
        ]);
        }else{
        return response()->json([
        'task'=> $tasks
        ]);
        }
    }


    public function taskfetchblocked(){
        $tasks = DB::table('tasks')
        ->where('status','=','Blocked')
        ->where('deleted','=',0)
        ->get();

        if(count($tasks) > 0){
        return response()->json([
        'task'=> $tasks
        ]);
        }else{
        return response()->json([
        'task'=> $tasks
        ]);
        }

    }

    public function taskfetchdone(){
        $tasks = DB::table('tasks')
        ->where('status','=','Completed')
        ->where('deleted','=',0)
        ->get();

        if(count($tasks) > 0){
        return response()->json([
        'task'=> $tasks
        ]);
        }else{
        return response()->json([
        'task'=> $tasks
        ]);
        }
    }


}
