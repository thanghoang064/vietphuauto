<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPermission extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                => 'required|unique:permissions,name,id'.$this->get('id'),
            'group_permission'    => 'required|max:70',
            'description'         => 'required|max:160',
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => 'Mời bạn nhập tên quyền',
            'name.unique'               => 'Tên quyền đã tồn tại',
            'group_permission.required' => 'Mời bạn điền nhóm quyền',
            'description.required'      => 'Mời bạn điền mô tả',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
