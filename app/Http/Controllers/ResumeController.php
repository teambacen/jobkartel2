<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;
use App\Generate;
use App\Avatar;
use Auth;
use App\Detail;

class ResumeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('profile.index');
    }

    public function pdf() {
        return view('profile.resume');
    }

    public function detail() {
        return view('profile.edit');
    }
    public function changeColor($resume,$color){
      switch ($color) {
        case 'grey':
            $colors = '#EBEBED';
          break;

        case 'yellow':
            $colors = '#F3CF62';
          break;
        case 'blue':
            $colors = '#19B5FE';
          break;
        case 'red':
           $colors = '#FCC9B9';
          break;
      }
      $detail = Detail::where('user_id', Auth::user()->id);
      $detail->update([
        'color' => $colors,
      ]);
      return $this->generate($resume);

    }

    public function generate($resume) {
        if (Auth::user()->subscription === 1) {
          # code...
        }
        $viewData = array(
            'title' => 'Resume',
            'avatar' => 'https://s3-us-west-2.amazonaws.com/tailor-buck/users/' . Auth::user()->avatars->gambar,
            //        'avatar' => Auth::user()->avatars->gambar,
            'watermark' => asset('images/watermark.png'),
            'color' => Auth::user()->detail->color
        );
        switch ($resume) {
            case 'resume1':
                $pdf = PDF::loadview('resume.resume1', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume2':
                $pdf = PDF::loadview('resume.resume2', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume3':
                $pdf = PDF::loadview('resume.resume3', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume4':
                $pdf = PDF::loadview('resume.resume4', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume5':
                $pdf = PDF::loadview('resume.resume5', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume6':
                $pdf = PDF::loadview('resume.resume6', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 1.5)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume7':
                $pdf = PDF::loadview('resume.resume7', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 1.5)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume8':
                $pdf = PDF::loadview('resume.resume8', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 1.5)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume9':
                $pdf = PDF::loadview('resume.resume9', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 1.5)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume10':
                $pdf = PDF::loadview('resume.resume10', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 1.5)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            default:
                $pdf = PDF::loadView('resume.default', $viewData)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
        }

        //user generate file counter
        $generate = new Generate;
        $generate->generate = 1;
        $generate->template = $resume;
        $generate->save();

        return $pdf->download('resume.pdf');
        //return view('resume.resume_1');
    }

    public function preview($resume) {
        switch ($resume) {
          case 'default':
              $colors = '#EBEBED';
            break;
          case 'resume1':
              $colors = '#EBEBED';
            break;
          case 'resume2':
              $colors = '#F3CF62';
          break;
          case 'resume3':
              $colors = '#F3CF62';
          break;
          case 'resume4':
              $colors = '#F3CF62';
          break;
          case 'resume5':
              $colors = '#F3CF62';
          break;
        }
        $viewData = array(
            'title' => 'Resume',
           'avatar' => 'https://s3-us-west-2.amazonaws.com/tailor-buck/users/' . Auth::user()->avatars->gambar,
            'watermark' => asset('images/watermark.png'),
            'color' => $colors,
        );
        switch ($resume) {
            case 'resume1':
                $view = view('resume.resume1', $viewData);
                $pdf = PDF::loadview('resume.resume1', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume2':
                $view = view('resume.resume2', $viewData);
                $pdf = PDF::loadview('resume.resume2', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume3':
                $view = view('resume.resume3', $viewData);
                $pdf = PDF::loadview('resume.resume3', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume4':
                $view = view('resume.resume4', $viewData);
                $pdf = PDF::loadview('resume.resume4', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume5':
                $view = view('resume.resume5', $viewData);
                $pdf = PDF::loadview('resume.resume5', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume6':
                $view = view('resume.resume6', $viewData);
                $pdf = PDF::loadview('resume.resume6', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume7':
                $view = view('resume.resume7', $viewData);
                $pdf = PDF::loadview('resume.resume7', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume8':
                $view = view('resume.resume8', $viewData);
                $pdf = PDF::loadview('resume.resume8', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume9':
                $view = view('resume.resume9', $viewData);
                $pdf = PDF::loadview('resume.resume9', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            case 'resume10':
                $view = view('resume.resume10', $viewData);
                $pdf = PDF::loadview('resume.resume10', $viewData)
                        ->setOption('page-size', 'A4')
                        ->setOption('zoom', 2)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
            default:
                $pdf = PDF::loadView('resume.default', $viewData)
                        ->setOption('margin-bottom', 5)
                        ->setOption('margin-top', 5)
                        ->setOption('margin-right', 5)
                        ->setOption('margin-left', 5);
                break;
        }

        return $pdf->stream('resume.pdf');
//        return $view;
    }

}
