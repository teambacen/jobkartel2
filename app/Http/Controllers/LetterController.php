<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoverLetter;
use Auth;
use PDF;

class LetterController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $detail = CoverLetter::where('user_id', Auth::user()->id)->get();
        return view('cover', compact('detail'));
    }

    public function insert(Request $request) {
        $letter = new CoverLetter;
        $letter->from_before = $request->from_before;
        $letter->from_first = $request->from_first;
        $letter->from_last = $request->from_last;
        $letter->from_phone = $request->from_phone;
        $letter->from_email = $request->from_email;
        $letter->from_street = $request->from_street;
        $letter->from_city = $request->from_city;
        $letter->from_postal = $request->from_postal;
        $letter->from_state = $request->from_state;
        $letter->to_before = $request->to_before;
        $letter->to_first = $request->to_first;
        $letter->to_last = $request->to_last;
        $letter->to_company = $request->to_company;
        $letter->to_department = $request->to_department;
        $letter->to_street = $request->to_street;
        $letter->to_city = $request->to_city;
        $letter->to_postal = $request->to_postal;
        $letter->to_state = $request->to_state;
        $letter->content_subject = $request->content_subject;
        $letter->content_body = $request->content_body;
        $letter->content_date = $request->content_date;
        $letter->user()->associate($request->user());
        $letter->save();

        return json_encode($letter);
    }

    public function update(Request $request) {
        $cover = CoverLetter::where('user_id', Auth::user()->id);
        $cover->update($request->all());
        return json_encode($cover);
    }

    public function getData() {
        return json_encode(Auth::user()->cover);
    }

    public function preview($letter) {
        $viewData = array(
            'title' => 'Cover Letter',
            'avatar' => 'https://s3-us-west-2.amazonaws.com/tailor-buck/users/' . Auth::user()->avatars->gambar,
        //    'avatar' => Auth::user()->avatars->gambar,
            'watermark' => asset('images/watermark.png')
        );
        switch ($letter) {
            case 'letter1':
                $view = view('letter.letter1', $viewData);
                $pdf = PDF::loadview('letter.letter1', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter2':
                $view = view('letter.letter2', $viewData);
                $pdf = PDF::loadview('letter.letter2', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter3':
                $view = view('letter.letter3', $viewData);
                $pdf = PDF::loadview('letter.letter3', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter4':
                $view = view('letter.letter4', $viewData);
                $pdf = PDF::loadview('letter.letter4', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter5':
                $view = view('letter.letter5', $viewData);
                $pdf = PDF::loadview('letter.letter5', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter6':
                $view = view('letter.letter6', $viewData);
                $pdf = PDF::loadview('letter.letter6', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter7':
                $view = view('letter.letter7', $viewData);
                $pdf = PDF::loadview('letter.letter7', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter8':
                $view = view('letter.letter8', $viewData);
                $pdf = PDF::loadview('letter.letter8', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter9':
                $view = view('letter.letter9', $viewData);
                $pdf = PDF::loadview('letter.letter9', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter10':
                $view = view('letter.letter10', $viewData);
                $pdf = PDF::loadview('letter.letter10', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            default:
                $view = view('letter.default', $viewData);
                $pdf = PDF::loadView('letter.default', $viewData)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
        }

//        return $view;
        return $pdf->stream('coverletter.pdf');
    }

    public function generate($letter) {
        $viewData = array(
            'title' => 'Cover Letter',
            'avatar' => 'https://s3-us-west-2.amazonaws.com/tailor-buck/users/' . Auth::user()->avatars->gambar,
          //  'avatar' => Auth::user()->avatars->gambar,
            'watermark' => ''
        );
        switch ($letter) {
            case 'letter1':
                $pdf = PDF::loadview('letter.letter1', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter2':
                $pdf = PDF::loadview('letter.letter2', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter3':
                $pdf = PDF::loadview('letter.letter3', $viewData)
                        ->setOption('page-size', 'A4')
\                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter4':
                $pdf = PDF::loadview('letter.letter4', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter5':
                $pdf = PDF::loadview('letter.letter5', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter6':
                $pdf = PDF::loadview('letter.letter6', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter7':
                $pdf = PDF::loadview('letter.letter7', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter8':
                $pdf = PDF::loadview('letter.letter8', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter9':
                $pdf = PDF::loadview('letter.letter9', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'letter10':
                $pdf = PDF::loadview('letter.letter10', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            default:
                $pdf = PDF::loadView('letter.default', $viewData)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
        }

        return $pdf->download('coverletter.pdf');
    }

}
