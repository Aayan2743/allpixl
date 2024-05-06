<?php
namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUsers;
use App\Imports\ImportUsersSingle;
use App\Models\leadstage;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class UploadController extends Controller
{
    public function errorpage(){
        // return view('errorpage',compact('failures'));
        return view('errorpage', compact('failures'));
    }
    public function download(){
        // Replace this path with the path to your Excel file
        $filePath = public_path('bulkuploadleads.xlsx');
        // Check if the file exists
        if (file_exists($filePath)) {
            // Return the file as a downloadable response
            return Response::download($filePath, 'example.xlsx');
        } else {
            // File not found, return a response indicating this
            return response()->json(['error' => 'File not found'], 404);
        }
    }
    //
    public function upload(Request $request)
    {


        if(session()->get('role')==1){
            // for admin

            $request->validate([
                'file' => 'required|mimes:xlsx,xls',
            ]);
            $file = $request->file('file');
            try {
                // $import->import('import-users.xlsx');
                Excel::import(new ImportUsers, $file);
                return redirect()->back()->with('success', 'Data uploaded successfully.');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                 $failures = $e->failures();
                 return view('errorpage', compact('failures'));
            }

        }else{
            // for user

            $request->validate([
                'file' => 'required|mimes:xlsx,xls',
            ]);
            $file = $request->file('file');
            try {
                // $import->import('import-users.xlsx');
                Excel::import(new ImportUsersSingle, $file);
                return redirect()->back()->with('success', 'Data uploaded successfully.');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                 $failures = $e->failures();
                 return view('errorpage', compact('failures'));
            }

        }
        // dd("gbdfgdfg");
       
    }
}
