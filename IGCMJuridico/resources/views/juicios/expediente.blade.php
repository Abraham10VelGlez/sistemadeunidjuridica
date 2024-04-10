@extends('layouts.app')
@section('title','Expediente Peritaje')
@section('content')



@if(count($errors)>0)
@foreach($errors->all() as $erro)
 <div class="alert alert-danger"><p> {!! $erro !!}</p></div>
@endforeach
@endif

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif 
                    @if (session('statuserror'))
                        <div class="alert alert-danger">
                            {{ session('statuserror') }}
                        </div>
                    @endif 
 


       
       @if(isset($oficce))
       @foreach($oficce as $ub) 
     <div class="row">
                <div class="col-md-12 center-block">
                <div class="jumbotron" > 
             
                
                
                
                
                <div class="row">
                <div class="col-md-12">   
                <div class="col-md-2 ">
                  Expediente: 
                  </div>
                  <div class="col-md-4">
                  <label>
                   {!! $ub->expediente !!}
                   </label>
                  </div>
                  
                                                                                                   
                 </div>
                 </div>
                  <div class="col-md-12">&nbsp;</div>
                  <div class="row">
                  <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  Quejoso:
                  </div>
                  <div class="col-md-4">
                  <label>
                  {!! $ub->quejoso !!}
                  </label>
                  </div>
                  
                  
                      
                  </div>
                  </div>
                  <div class="col-md-12">&nbsp;</div>
                  <div class="row">
                  <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  Asunto:
                  </div>
                  <div class="col-md-4">
                  <label>
                  {!! $ub->asunto !!}
                  </label>
                  </div>

                                                
                  </div>
                  </div>
                  <div class="col-md-12">&nbsp;</div>
                  
                  
                  <div class="col-md-12">&nbsp;</div>
                  <div class="row">
                  <div class="col-md-12 center-block">
                  <div class="col-md-2">
                  Emitido por:
                  </div>
                  <div class="col-md-8">
                  <label>
                  {!! $ub->emitidopor !!}
                  </label>                  
                  </div>
                  </div>
                  </div>
                  <div class="col-md-12">&nbsp;</div>
                  <div class="row">
                  <div class="col-md-12 center-block">
                  <div class="col-md-2">
                  Fecha de registro:
                  </div>
                  <div class="col-md-4">
                  <label>
                  {!! date($ub->fechanex) !!}
                  </label>
                  </div> 
                  <div class="col-md-2">
                  Fecha limite:
                  </div>
                  <div class="col-md-4">
                  <label>                  
                  {!! date($ub->fechalimit) !!}
                  </label> 
                  </div>
                                    
                                                      
                  </div>
                  </div>
                  <div class="col-md-12">&nbsp;</div>
                  
                  <div class="col-md-12">&nbsp;</div>
                  <div class="row">
                  <div class="col-md-12 center-block">                  
                  <div class="col-md-2">
                  Escaneo de peritaje:
                  </div>
                  <div  class="col-md-4">
                  <label>
                  <a href="/peritajes/{!! $ub->scan !!}">{!! $ub->scan !!}</a>
                  </label>
                  <div id="filesmore"></div>
                  </div>                                      
                  </div>
                  </div>
                  <div class="col-md-12">&nbsp;</div>
                 
                
     
                </div>
                
            </div>
            </div>
            @endforeach
            @else 
            {!! Form::open(array('url' => '/ingresadatosdos', 'method' => 'post', 'files' => true)) !!}
            <input type="hidden" name="_token" value=" {{csrf_token()}}" id="token">
                <div class="row">
                <div class="col-md-12 center-block">
                <div class="jumbotron" > 
                
                
                <div class="row">
                <div class="col-md-12">   
                <div class="col-md-2 ">
                  No. Juicio: 
                  </div>
                  <div class="col-md-3">
                  <select id="nojuicio" name="nojuicio" class="form-control" >
                  <option value="0">Selecciona No. Juicio</option>
                  @foreach($datas as $ub)
                  <!-- $ubica->all() as $ub -->
                  <option value="{!! $ub->xhorto !!}" >{!! $ub->xhorto !!}</option>                                   
                  @endforeach
                  </select>  
                  </div>
                  
                  <div class="col-md-1 ">
                  &nbsp;
                  </div> 
                  <div class="col-md-3">
                  &nbsp;
                  </div>                                                                                  
                 </div>
                 </div>
                
                
                
                
                <div class="row">
                <div class="col-md-12">   
                <div class="col-md-2 ">
                  Peritaje: 
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" id="oficio" name="oficio" required  autofocus>
                  </div>
                  
                  <div class="col-md-1 ">
                  <label>/</label> 
                  </div> 
                  <div class="col-md-3">
                  <input class="form-control" type="text" id="oficiopartdos" name="oficiopartdos" required  autofocus >
                  </div>                                                                                  
                 </div>
                 </div>
                <!--  <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>-->
                 <div class="row">
                <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  Tipo de Peritaje:
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" id="tipodocumento" name="tipodocumento" placeholder="Ejemplo: NUC,Exhorto,etc" required  autofocus >
                  </div>
                  
                  <div class="col-md-1 ">No. </div>                    
                  <div class="col-md-2">
                  <input class="form-control" type="text" id="xhorto" name="xhorto" required  autofocus >
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-1 ">
                  <label>/</label></div>  
                  <div class="col-md-2">
                  <input class="form-control" type="text" id="xhortopartdos" name="xhortopartdos" required  autofocus >
                  </div>    
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  Asunto:
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" id="asunto" name="asunto" required  autofocus>
                  </div>

                  <div class="col-md-2">
                  Fecha de registro:
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="date" id="fechanex" name="fechanex" required  autofocus >
                  </div>                               
                  </div>
                  </div> 
                  <div class="row">
                  <div class="col-md-12">                                     
                  <div class="col-md-2">
                  Para quien va dirigido:
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" id="paradigido" name="paradigido" required  autofocus >
                  </div>

                  <div class="col-md-2">
                  Cargo del Dirigente:
                  </div>
                  <div class="col-md-5">
                  <input class="form-control" type="text" id="cargo" name="cargo" required  autofocus >
                  </div>                                  
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12 center-block">
                  <div class="col-md-2">
                  Emitido por:
                  </div>
                  <div class="col-md-3">
                  <select id="ubicacion" name="ubicacion" class="form-control" >
                  <option value="0">Selecciona Ubicacion</option>
                  @foreach($ubica as $ub)
                  <!-- $ubica->all() as $ub -->
                  <option value="{!! $ub->juzgados !!}" >{!! $ub->juzgados !!}</option>                                   
                  @endforeach
                  </select>                  
                  </div>
                  <div class="col-md-1">Otro:</div>                                              
                  <div class="col-md-3">
                  <input class="form-control" type="text" id="emitidopor" name="emitidopor" required  autofocus >
                  </div>                                      
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12 center-block">
                  <div class="col-md-2">
                  Fecha limite:
                  </div>
                  <div class="col-md-3">                  
                  <input class="form-control" type="date" id="fechalimit" name="fechalimit" required  autofocus > 
                  </div>
                                    
                  <div class="col-md-1">
                  Numerales:
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" id="numerales" name="numerales" required  >
                  </div>                                     
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12 center-block">
                  <div class="col-md-2">
                  Motivos a solicitar:
                  </div>
                  <div class="col-md-6">                  
                  <textarea class="form-control" id="motivossol" name="motivossol" rows="3" cols="90" required  autofocus ></textarea> 
                  </div>                 
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12 center-block">                  
                  <div class="col-md-2">
                  Escaneo de peritaje:
                  </div>
                  <div  class="col-md-4">
                  <input  type="file" id="scan" name="scan" required  autofocus >
                  <div id="filesmore"></div>
                  </div>                                      
                  </div>
                  </div>
                  
                  <div class="row">
                  <div  class="col-md-12">
                  <center>
                  <input type="submit"  class="btn btn-success btn-block" value="Registrar">
                  </center>
                  
                  </div>
                  </div>
                
     
                </div>
                
            </div>
            </div>
             {!! Form::close() !!}
            @endif 
            
              

@endsection
