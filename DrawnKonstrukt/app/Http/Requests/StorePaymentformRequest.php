<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentformRequest extends FormRequest
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
            'Employer'           => 'required',
            'Person'           => 'required',
            'Project'           => 'required',
            'Number'           => 'required',
            'Period'           => 'required',
            'Period'           => 'required',
            'Work'           => 'required',
            'Contract'           => 'required',
            'Prepared'           => 'required',
            'OrigiAmount'           => 'required',
            'NetChange'           => 'required',
            'TotalComplete'           => 'required',
            'Retain'           => 'required',
            'Retainage'           => 'required',
            'Previours'           => 'required',
            'Dues'           => 'required',
            'Balance'           => 'required',
            'Contractor'           => 'required',
            'Date'           => 'required',
            'County'           =>'required',
            'Location'           => 'required',
            'Day'           => 'required',
            'Month'           => 'required',
            'Expire'           => 'required',
            'Public'           => 'required',
            'AmountCert'           => 'required',
            'Engineer'           => 'required',
            'DDay'           => 'required',

        ];
    }
    public function data()
    {
        $data = [
            'Employer'           => $this->get('Employer'),
            'Person'           => $this->get('Person'),
            'Project'           => $this->get('Project'),
            'Number'           => $this->get('Number'),
            'Period'           => $this->get('Period'),
            'Work'           => $this->get('Work'),
            'Contract'           => $this->get('Contract'),
            'Prepared'           => $this->get('Prepared'),
            'OrigiAmount'           => $this->get('OrigiAmount'),
            'NetChange'           => $this->get('NetChange'),
            'TotalComplete'           => $this->get('TotalComplete'),
            'Retain'           => $this->get('Retain'),
            'Retainage'           => $this->get('Retainage'),
            'Previours'           => $this->get('Previours'),
            'Dues'           => $this->get('Dues'),
            'Balance'           => $this->get('Balance'),
            'Contractor'           => $this->get('Contractor'),
            'Date'           => $this->get('Date'),
            'County'           => $this->get('County'),
            'Location'           => $this->get('Location'),
            'Day'           => $this->get('Day'),
            'Month'           => $this->get('Month'),
            'Public'           => $this->get('Public'),
            'Expire'           => $this->get('Expire'),
            'AmountCert'           => $this->get('AmountCert'),
            'Engineer'           => $this->get('Engineer'),
            'DDay'           => $this->get('DDay'),
        ];
        return $data;
    }
}



