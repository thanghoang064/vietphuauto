<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;

class AdminBaseController extends Controller
{
    public function getMessagesSuccess($messages = 'Thêm mới')
    {
        \Session::flash('toastr', [
            'type'    => 'success',
            'message' => $messages
        ]);
    }
}
