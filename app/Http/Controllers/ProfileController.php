<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Contact;
use App\Work;
use App\Education;
use App\Skill;
use App\Language;
use App\Award;
use Auth;
use Response;
use Image;
use App\Avatar;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct(){
      return $this->middleware('auth');
    }
    //insert
    public function detailInsert(Request $request){
        $detail = new Detail;
        $detail->first = $request->first;
        $detail->last = $request->last;
        $detail->position = $request->position;
        $detail->description = $request->description;
        $detail->default = 'test';
        $detail->dob = $request->dob;
        $detail->nationality = $request->nationality;
        $detail->email = $request->email;
        $detail->phone = $request->phone;
        $detail->address = $request->address;
        $detail->city = $request->city;
        $detail->postal = $request->postal;
        $detail->country = $request->country;
        $detail->user()->associate($request->user());
        $detail->save();
    }
    public function upload_gambar(Request $request){
        //$avatar = new Avatar;
      /*  if ($request->file('gambar')) {
          $file = $request->file('gambar');
          $filename = rand().'.'.$file->getClientOriginalExtension();
          $path = public_path('media/users/'.$filename);
          Image::make($file->getRealPath())->resize(150,180)->save($path);
          if (count(Auth::user()->avatar) === 0) {
            $avatar->gambar =  $filename;
            $avatar->user()->associate($request->user());
            $avatar->save();
          }else{
            $update = Avatar::where('user_id', Auth::user()->id);
            $update->update([
                'gambar' => $filename
            ]);
          }

        }*/
        if($request->file('gambar')){
          $avatar = new Avatar;
          $file = $request->file('gambar');
          $filename = rand().'.'.$file->getClientOriginalExtension();
          Storage::disk('s3')->putFileAs('users/', $file, $filename);
          if (count(Auth::user()->avatars) === 0) {
            $avatar->gambar =  $filename;
            $avatar->user()->associate($request->user());
            $avatar->save();
          }else{
            $update = Avatar::where('user_id', Auth::user()->id);
            $update->update([
                'gambar' => $filename
            ]);
          }
        }

        return json_encode($filename);
    }
    public function contactInsert(Request $request){
       $contact = new Contact;
       $contact->phone = $request->phone;
       $contact->email = $request->email;
       $contact->web = $request->web;
       $contact->address = $request->address;
       $contact->user()->associate($request->user());
       $contact->save();
    }
    public function workInsert(Request $request){
      $work = new Work;
      $work->position = $request->position;
      $work->company = $request->company;
      $work->start_year = $request->start_year;
      $work->end_year = $request->end_year;
      $work->city = $request->city;
      $work->state = $request->state;
      $work->work_description = $request->work_description;
      $work->industry =  $request->industry;
      $work->start_month = $request->start_month;
      $work->end_month = $request->end_month;
      $work->user()->associate($request->user());
      $work->save();

      return $work->toJson();
    }
    public function educationInsert(Request $request){
      $edu = new Education;
      $edu->institute = $request->institute;
      $edu->qualification = $request->qualification;
      $edu->graduate_year = $request->graduate_year;
      $edu->grade = $request->grade;
      $edu->graduate_month = $request->graduate_month;
      $edu->start_year = $request->start_year;
      $edu->start_month = $request->start_month;
      $edu->description = $request->description;
      $edu->city = $request->city;
      $edu->state = $request->state;
      $edu->user()->associate($request->user());
      $edu->save();
    }
    public function skillInsert(Request $request){
      $skill = new Skill;
      $skill->skil = $request->skil;
      $skill->level = $request->level;
      $skill->category = $request->category;
      $skill->user()->associate($request->user());
      $skill->save();
      return json_encode($skill);
    }
    public function languageInsert(Request $request){
      $language = new Language;
      $language->lang = $request->lang;
      $language->level  = $request->level;
      $language->user()->associate($request->user());
      $language->save();
    }
    public function awardInsert(Request $request){
      $award = new Award;
      $award->name = $request->name;
      $award->month = $request->month;
      $award->year = $request->year;
      $award->description = $request->description;
      $award->user()->associate($request->user());
      $award->save();
    }
    //update
    public function detailUpdate(Request $request){
      $detail = Detail::where('user_id', Auth::user()->id);
      $detail->update($request->all());
    }
    public function workUpdate(Request $request, $id){
      $work = Work::find($id);
      $work->update($request->all());
    }
    public function eduUpdate(Request $request, $id){
      $education = Education::find($id);
      $education->update($request->all());
    }
    public function skillUpdate(Request $request, $id){
      $skill = Skill::find($id);
      $skill->update($request->all());
    }
    public function languageUpdate(Request $request, $id){
      $language = Language::find($id);
      $language->update($request->all());
    }
    public function awardUpdate(Request $request, $id){
      $award = Award::find($id);
      $award->update($request->all());
    }
    //delete
    public function workDelete($id){
      $work = Work::find($id);
      $work->delete();
    }
    public function eduDelete($id){
      $work = Education::find($id);
      $work->delete();
    }
    public function skillDelete($id){
      $work = Skill::find($id);
      $work->delete();
    }
    public function languageDelete($id){
      $work = Language::find($id);
      $work->delete();
    }
    public function awardDelete($id){
      $work = Award::find($id);
      $work->delete();
    }
    //get
    public function getUser(){
      return json_encode(Auth::user());
    }
    public function getExperience(){
      return json_encode(Auth::user()->work);
    }
    public function getExperienceById($id){
      $work = Work::find($id);
      return $work->toJson();
    }
    public function getDetail(){
      $detail = Detail::where('user_id' , Auth::user()->id)->get();
      return $detail->toJson();
    }
    public function getEducation(){
      return json_encode(Auth::user()->education);
    }
    public function getEducationById($id){
      $work = Education::find($id);
      return $work->toJson();
    }
    public function getSkill(){
      return json_encode(Auth::user()->skill);
    }
    public function getSkillById($id){
      $work = Skill::find($id);
      return $work->toJson();
    }
    public function getLanguage(){
      return json_encode(Auth::user()->language);
    }
    public function getLanguageById($id){
      $work = Language::find($id);
      return $work->toJson();
    }
    public function getAward(){
      return json_encode(Auth::user()->award);
    }
    public function getAwardById($id){
      $work = Award::find($id);
      return $work->toJson();
    }
    public function getAvatar(){
      $avatar = Avatar::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();
      return  json_encode($avatar);
    }
}
