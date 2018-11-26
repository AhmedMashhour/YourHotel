<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use App\roomBooking;
use App\contacts;
use App\room;
use App\payment;
use Illuminate\Support\Facades\Hash;

class Admin_controller extends Controller
{
    public function login()
    {
        return view('Admin.index');
    }
    public function index()
    {
            $roomsBooking= roomBooking::all();
            $contacts= contacts::all();
            return view('admin.home',['roombooking'=> $roomsBooking,'contacts'=> $contacts]);
    }
    public function dologin()
    {

       if(auth()->guard('admin')->attempt(['email'=>request('email'),'password'=>request('password')]))
       {
           return redirect('admin/home');
       }
       else
       {
           return redirect('admin/login');
       }
    }


    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }
    public function showPayment()
    {
       $pay=payment::all();
       return view('admin.payment',['pay'=>$pay]);
    }

    public function messages()
    {
       $mes=contacts::all();
       return view('admin.message',['mes'=>$mes]);
    }
    public function newsletterpdelete($id)
    {

        contacts::find($id)->delete();
        return redirect('admin/messages');
    }

    public function usersetting()
    {
        $mes=Admin::all();
        return view('admin.usersetting',['mes'=>$mes]);
    }
    public function adduser(Request $request)
    {
       // $mes=new Admin;
        $data= $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

    ]);
       $add =[
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>Hash::make(request('password'))

        ];
        Admin::create($add);

        return redirect('admin/usersetting');
    }

    public function deleteuser(Request $request)
    {
        Admin::find(request('id'))->delete();
        return redirect('admin/usersetting');
    }

    public function newsletterp($idp)
    {
       $p=contacts::find($idp);
        if($p->approval=='Allowed')
        {
            $p->approval='Not Allowed';
        }
        else
        {
            $p->approval='Allowed';
        }
       $up=[
        'id'=>$idp,
                'fullName'=>$p->fullName,
                'phone'=>$p->phone,
                'email'=>$p->email,
                'cdata'=>$p->cdata,
                'approval'=>$p->approval


       ];
       contacts::where('id',$idp)->update($up);
       return redirect('admin/messages');

    }



    public function follower(Request $request)
    {
        $data=$this->validate(request(),[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',

    ]);
            $arr=new contacts ;
            $arr->approval='Not Allowed';

            $arr->fullName=request('name');
            $arr->phone=request('phone');
            $arr->email=request('email');
            $arr->cdata=date('y-m-d',time());
            $arr->save();
           //$d= contacts::create($arr);

           return redirect('/');

    }


    public function profit()
    {
       $pay=payment::all();

       return view('admin.payment',['pay'=>$pay]);
    }
    public function print($pid)
    {
        $pay=payment::find($pid);
        $rs= room::all();
        $r='';
        foreach($rs as $r)
        {
            if($r->cusid==$pay->id)
            {

                break;
            }
        }
        //dd($r);
        $up=[
            'id'=>$r->id,
            'type'=>$r->type,
            'bedding'=>$r->bedding,
            'place'=>'Free',
            'cusid'=>null,

        ];
        room::where('cusid',$pay->id)->update($up);
       // $f= roomBooking::find($pay->id);
     if(roomBooking::find($pay->id)!=null){
        roomBooking::find($pay->id)->delete();
     }
       return view('admin.print',['re'=>$pay]);
    }

    public function conform()
    {
        if(request()->has('conf')&&request()->has('id')&&request('conf')=='Conform')
        {
            $data=roomBooking::find(request('id'));
            $up=[

                'titel'=>$data->titel,
                'firstName'=>$data->firstName,
                'lastName'=>$data->lastName,
                'email'=>$data->email,
                'national'=>$data->national,
                'country'=>$data->country,
                'phone'=>$data->phone,
                'roomType'=>$data->roomType,
                'bed'=>$data->bed,
                'numberOfRoom'=>$data->numberOfRoom,
                'Meal'=>$data->Meal,
                'wantedAt'=>$data->wantedAt,
                'leftAt'=>$data->leftAt,
                'numberOfDays'=>$data->numberOfDays,
                'stat'=>'Conform'

             ];

            roomBooking::where('id',request('id'))->update($up);
        $room= roomBooking::find(request('id'));
        /////////////////////////////////////////////////////////////
        $type_of_room = 0;
        if($room->roomType=="Superior Room")
        {
            $type_of_room = 320;

        }
        else if($room->roomType=="Deluxe Room")
        {
            $type_of_room = 220;
        }
        else if($room->roomType=="Guest House")
        {
            $type_of_room = 180;
        }
        else if($room->roomType=="Single Room")
        {
            $type_of_room = 150;
        }



        $type_of_bed=0;
        if($room->bed=="Single")
        {
            $type_of_bed = $type_of_room * 1/100;
        }
        else if($room->bed=="Double")
        {
            $type_of_bed = $type_of_room * 2/100;
        }
        else if($room->bed=="Triple")
        {
            $type_of_bed = $type_of_room * 3/100;
        }
        else if($room->bed=="Quad")
        {
            $type_of_bed = $type_of_room * 4/100;
        }
        else if($room->bed=="None")
        {
            $type_of_bed = $type_of_room * 0/100;
        }
        $type_of_meal=0;

        if($room->meal=="Room only")
        {
            $type_of_meal=$type_of_bed * 0;
        }
        else if($room->meal=="Breakfast")
        {
            $type_of_meal=$type_of_bed * 2;
        }else if($room->meal=="Half Board")
        {
            $type_of_meal=$type_of_bed * 3;

        }else if($room->meal=="Full Board")
        {
            $type_of_meal=$type_of_bed * 4;
        }


        $ttot = $type_of_room *$data->numberOfDays * $data->numberOfRoom;
        $mepr = $type_of_meal *$data->numberOfDays;
        $btot = $type_of_bed *$data->numberOfDays;

        $fintot = $ttot + $mepr + $btot ;


        $pay= new payment ;
        $pay->id=request('id');
        $pay->titel=$room->titel;
        $pay->firstName=$room->firstName;
        $pay->lastName=$room->lastName;
        $pay->roomType=$room->roomType;
        $pay->typeOfBed=$room->bed;
        $pay->numberOfRoom=$room->numberOfRoom;
        $pay->wantedAt=$room->wantedAt;
        $pay->leftAt=$room->leftAt;
        $pay->numberOfDays=$room->numberOfDays;
        $pay->meal=$room->Meal;
        $pay->ttot=$ttot;
        $pay->mepr=$mepr;
        $pay->btot=$btot;
        $pay->fintot=$fintot;
        $pay->save();
        ///////////////////////////////////////////////////////////////

        return redirect('admin/home');
        }

    }




     public function showRoomBook($rid)
    {
        $roomsBooking= roomBooking::find($rid);
        $num_rooms= room::all()->count();
        $num_Superior=room::where('type','Superior Room')->count();
        $num_gest=room::where('type','Guest House')->count();
        $num_single=room::where('type','Single Room')->count();
        $num_deluxe=room::where('type','Deluxe Room')->count();

        $num_pay=payment::all()->count();
        $p_Su=payment::where('roomType','Superior Room')->count();
        $p_Gu=payment::where('roomType','Guest House')->count();
        $p_Si=payment::where('roomType','Single Room')->count();
        $p_De=payment::where('roomType','Deluxe Room')->count();

        return view('admin.roombook',['roo'=>$roomsBooking,'num_rooms'=>$num_rooms,'su'=>($num_Superior-$p_Su)
        ,'gu'=>($num_gest-$p_Gu),'si'=>($num_single-$p_Si),'de'=>($num_deluxe-$p_De),'total'=>($num_rooms-$num_pay)]);
    }
    public function show($id)
    {
        $booked=roomBooking::find($id);
        return view('admin.show',['booked'=>$booked]);
    }
    public function inser_reservation()
    {
        $roombook=new roomBooking();
        $roombook->titel=\request('titel');
        $roombook->firstName=\request('firstName');
        $roombook->lastName=\request('lastName');
        $roombook->email=\request('email');
        $roombook->national=\request('national');
        $roombook->country=\request('country');
        $roombook->phone=\request('phone');
        $roombook->roomType=\request('roomType');
        $roombook->bed=\request('bed');
        $roombook->numberOfRoom=\request('numberOfRoom');
        $roombook->Meal=\request('Meal');
        $roombook->wantedAt=\request('wantedAt');
        $roombook->leftAt=\request('leftAt');
        $roombook->numberOfDays=\request('numberOfDays');
        $roombook->stat=\request('stat');
        $roombook->save();
        return redirect('/');
    }

    public function setting()
{
        $rooms=room::all();
        return view('admin.setting',['rooms'=>$rooms]);

}
    public function room()
    {
        $rooms=room::all();
        return view('admin.room',['rooms'=>$rooms]);

    }
    public function addroom()
    {
        $room=new room;
        $room->type=\request('type');
        $room->place=\request('place');
        $room->bedding=\request('bedding');
        $room->save();
        return back();

    }


    public function delete_room()
    {
        room::find(\request('id'))->delete();
        return back();

    }

    public function roomdel()
    {
        $rooms=room::all();
        return view('admin.roomodel',['rooms'=>$rooms]);

    }

}
