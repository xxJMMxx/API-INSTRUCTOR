<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Resources\instructorCollection;
use App\Filters\InstructorFilters;
use App\Http\Requests\StoreInstructorRequest;
use App\Http\Requests\UpdateInstructorRequest;
use App\Http\Resources\instructorResource;

class InstructorController extends Controller
{

    public function index(Request $request)
    {
        // Inicializa FiltrosPeriodo para manejar la lógica de filtrado
       $filter= new InstructorFilters();
        // Transforma y obtiene los elementos de consulta para el filtrado
       $QueryItems = $filter ->transform($request);
        // Aplica filtros al modelo Periodo
       $Instructor = Instructor::where($QueryItems);
       // Devuelve el resultado paginado usando el recurso PeriodoCollection
       return new instructorCollection($Instructor->paginate()->appends($request->query()));
   
   }

    /**
    *public function index()
    *{
     *   $instructors = Instructor::all();
      *  return view('instructor.index', compact('instructors'));
    *}
    */

   
    public function create()
    {
        return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstructorRequest $request)
    {

         // Crea un nuevo recurso instructor y lo devuelve
         return new instructorResource(Instructor::create($request->all()));


       /** $data = $request->validate([
          *  'name' => 'required|max:200',
           * 'lastname' => 'required|max:200',
            *'education' => 'required|max:200',
            *'rfc' => 'required|max:200',
            *'sex' => 'required|max:100',
        *]);

        *Instructor::create($data);

       
        *return redirect()->route('instructors.index')->with('success', 'GATOGATOGATO creado satisfactoriamente.');
    */
    }

  
    public function show(Instructor $instructor)
    {
       // return view('instructor.show', compact('instructor'));
       return new instructorResource($instructor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        return view('instructor.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstructorRequest $request, Instructor $instructor)
    {
        // Actualiza el Periodo con los datos de la solicitud
        $instructor->update($request->all());
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();

        return redirect()->route('instructors.index')->with('success', 'tabla del instructor eliminado satisfactoriamente.');
    }
}