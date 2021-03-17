<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersExampleRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required|min:2|max:30',
            'email'=>'required|email',
            'dob'=>'date_format:Y-m-d|before:today',
            'city_id'=>'required',


        ];
    }


    public function messages()
    {
       $messages = [
           'name.required'=>'Yêu cầu nhập lại!',
           'email.required'=>'Email chưa đúng !!!',
           'dob.required'=>'Yêu cầu nhập lại',
           'city_id'=>'Yêu cầu nhập lại!',
           'dob.before' => 'Ban phai nhap ngay sinh truoc ngay hom nay'
       ];

       return $messages;
    }
}
