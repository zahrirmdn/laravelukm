<?php

namespace App\Http\Controllers;
use App\Models\Tiket;
use App\Models\Pemesanan;
use App\Models\Event;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke()
    // {
    //     $events = DB::table('events')->get();
    //     return view('event', compact('events'));

    // }

    /**
     * Show the form for creating a new pemesanan.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $events = Event::all();
         return view('event',compact('events'));
     }

    public function create()
    {
        $events = Event::all();
        return view('tambaevent', compact('events'));
    }


    /**
     * Store a newly created pemesanan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_event' => 'required|string',
            'tgl_event' => 'required|date_format:Y-m-d\TH:i',
        ]);

        Event::create($validatedData);

        return redirect('/event')->with('success', 'Event berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $event = DB::table('events')->where('id',$id)->first();
        return view('tampildataevent', ['event' => $event]);
    }

        public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tgl_event' => 'required|date_format:Y-m-d\TH:i',
        ]);

        DB::table('events')->where('id', $id)->update($validatedData);

        return redirect('/event');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $event = Event::findOrFail($id);

        // Loop melalui tiket terkait
        foreach ($event->tikets as $tiket) {
            // Menghapus pembayaran terkait tiket
            $tiket->pembayarans()->delete();
        }

        // Menghapus tiket terkait event
        $event->tikets()->delete();

        // Menghapus event
        $event->delete();

        return redirect('/event')->with('success', 'Event berhasil dihapus beserta data tiket dan pembayaran terkait.');
    }


}
