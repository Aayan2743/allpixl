<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Throwable;
use App\Models\leads;

// class ImportUsers implements ToModel, WithStartRow
class ImportUsersSingle implements ToModel, WithStartRow ,WithValidation
{
    /**
    * @param Collection $collection
    */

    
    public $failures;
    private $isFirstRow = true;
    public function onError(Throwable $e)
    {
        $this->failures[] = $e->getMessage();

        // Dump and die to see validation errors
        dd($this->failures);
    }
    public function collection(Collection $collection)
    {
        //
    }
    
   

    public function startRow(): int
        {
            // Skip the first row (header row)
            return 2;
        }
    
        public function rules(): array
        {
            
            return [
                '0' => ['required','regex:/(^[A-Za-z0-9 ]+$)+/'],
                '1' => ['required','regex:/(^[A-Za-z0-9 ]+$)+/'],
                '2' => ['required','regex:/(^[A-Za-z0-9 ]+$)+/'],
                '3' => ['required','numeric'],
                '4' => ['required'],
                '5' => ['required','numeric','digits:10'],
                '6' => ['required','email'],
                 '7' => ['required'],
                // '8' => ['required'],
                
                
                // '1' => ['required','numeric','digits:10'],
                // '2' => ['required','regex:/(^[A-Za-z ]+$)+/'],
                // '3' => ['required'],
                // '4' => ['required'],
            ];
        }
    
        public function customValidationAttributes()
        {
            return [
              '0' => 'Customer Name',
              '1' => 'Company Name',
              '2' => 'Required Service',
              '3' => 'Price',
              '4' => 'Requirment Description',
              '5' => 'Contact Number',
              '6' => 'Contact Email Address',
              '7' => 'Lead Source',
            //   '8' => 'Team id /  Staff id ',
            //   '9' => 'Team Name /  Staff Name ',
          
          ];
            
        }
        
 
    

    public function model(array $row)
    {


        


        // dd($row);

        // dd(session()->get('uid'));
        return new leads([
            'customer' => $row[0],
            'title' => $row[2],
            'ogrinazation' => $row[1],
            'value' => $row[3],
            'description' => $row[4],
            'owner' => session()->get('fullname'),
            // 'owner' => $row[9],
            'leadownerid' => session()->get('uid'),
            // 'leadownerid' => $row[8],
            'phone' => $row[5],
            'email' => $row[6],
            'created_by' => session()->get('fullname'),
            'created_by_id' => session()->get('uid'),
            'leadsource' => $row[7],
            'companyid' => session()->get('cid'),
            // Map Excel columns to database columns as required
        ]);
    }

  
}
