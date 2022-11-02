<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWagereportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'           => 'required',
            'code'           => 'required',
            'Manager'     => 'required',
            'Location'     => 'required',
            'SiteManager'     => 'required',
            'ContractNo'      => 'required',
            'Payroll'          => 'required',
            'Week'            => 'required',
            'Start'           => 'required',
            'End'     => 'required',
            'Names'     => 'required',
            'Work'        => 'required',
            'Mon'         => 'required',
            'Tue'          => 'required',
            'Wed'           => 'required',
            'Thr'         => 'required',
            'Fri'     => 'required',
            'Sat'     => 'required',
            'Sun'        => 'required',
            'Total'          => 'required',
            'Rate'          => 'required',
            'Gross'           => 'required',
            'Nhif'           => 'required',
            'Nssf'     => 'required',
            'Other'     => 'required',
            'GrandTotal'        => 'required',
            'Net'          => 'required',
            'Note'           => 'required',
        ];
    }
    public function data()
     {
        $data=[

            'name'           => $this->get('name'),
            'code'           => $this->get('code'),
            'Manager'     =>$this->get('Manager'),
            'Location'     =>$this->get('Location'),
            'SiteManager'        => $this->get('SiteManager'),
            'ContractNo'          => $this->get('ContractNo'),
            'Payroll'          => $this->get('Payroll'),
            'Week'            => $this->get('Week'),
            'Start'           => $this->get('Start'),
            'End'     => $this->get('End'),
            'Names'     =>$this->get('Names'),
            'Work'        => $this->get('Work'),
            'Mon'          => $this->get('Mon'),
            'Tue'          => $this->get('Tue'),
            'Wed'            => $this->get('Wed'),
            'Thr'           => $this->get('Thr'),
            'Fri'     => $this->get('Fri'),
            'Sat'     =>$this->get('Sat'),
            'Sun'        => $this->get('Sun'),
            'Total'          => $this->get('Total'),
            'Rate'          => $this->get('Rate'),
            'Gross'            => $this->get('Gross'),
            'Nhif'           => $this->get('Nhif'),
            'Nssf'     => $this->get('Nssf'),
            'Other'     =>$this->get('Other'),
            'GrandTotal'        => $this->get('GrandTotal'),
            'Net'          => $this->get('Net'),
            'Note'            => $this->get('Note'),
        ];
        return $data;
    }


}
