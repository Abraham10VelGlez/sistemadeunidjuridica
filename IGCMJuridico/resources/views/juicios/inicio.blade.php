@extends('layouts.app')
@section('title','Juicios')
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
       {!! Form::open(array('url' => '/ingresadatoseditados', 'method' => 'post', 'files' => true)) !!} 
       @foreach($oficce as $ofc)
       <input type="hidden" name="_token" value=" {{csrf_token()}}" id="token">
       <div class="row">
                <div class="col-md-12 center-block">
                <div class="jumbotron" > 
                <div class="row">
                <div class="col-md-12 center-block">   
                <div class="col-md-2">
                  Oficio:
                  </div>
                  <div class="col-md-2">
                  <input type="text" id="oficio" name="oficio" required  autofocus @if(isset($ofc))value="{{$ofc->oficio}}"  @else value="" @endif>
                  </div>
                  <div class="col-md-1">/</div>                                  
                  <div class="col-md-2">
                  <input type="text" id="oficiopartdos" name="oficiopartdos" required  autofocus @if(isset($ofc))value="{{$ofc->oficiopartdos}}"  @else value="" @endif>
                  </div>                  
                                    
                </div>
                </div>
                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
               <div class="row">
                <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  Tipo de Oficio:
                  </div>
                  <div class="col-md-2">
                  <input type="text" id="tipodocumento" name="tipodocumento" placeholder="Ejemplo: Exhorto." required  autofocus @if(isset($ofc))value="{{$ofc->tipodocumento}}"  @else value="" @endif>
                  </div>
                  <div class="col-md-1"> No. </div>                    
                  <div class="col-md-2">
                  <input type="text" id="xhorto" name="xhorto" required  autofocus @if(isset($ofc))value="{{$ofc->xhorto}}"   @else value="" @endif>
                  </div>
                  <div class="col-md-1">/</div>  
                  <div class="col-md-2">
                  <input type="text" id="xhortopartdos" name="xhortopartdos" required  autofocus @if(isset($ofc))value="{{$ofc->xhortopartdos}}"  @else value="" @endif>
                  </div>    
                                                        
                </div>
                </div>         
                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
                
                <div class="row">
                <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  Asunto:
                  </div>
                  <div class="col-md-2">
                  <input type="text" id="asunto" name="asunto" required  autofocus @if(isset($ofc))value="{{$ofc->asunto}}"@else value="" @endif>
                  </div>
                  <div class="col-md-1"></div>
                  
                  <!--  <div class="col-md-2">
                  Fecha del Entrada:
                  </div>
                  <div class="col-md-2">
                  
                  <input type="date" id="feche" name="feche" required  autofocus @if(isset($ofc)) value="<?php /*echo date("Y-m-d", strtotime($ofc->feche));*/?>" @else value="" @endif >
                  </div>-->  
                                                        
                </div>
                </div>
                
                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
                
                <div class="row">
                <div class="col-md-12 center-block">                                     
                  <div class="col-md-3">
                  Para quién va dirigido:
                  </div>
                  <div class="col-md-2">
                  <input type="text" id="paradigido" name="paradigido" required  autofocus @if(isset($ofc))value="{{$ofc->paradigido}}"@else value="" @endif>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-2">
                  Cargo del dirigente:
                  </div>
                  <div class="col-md-2">
                  <input type="text" id="cargo" name="cargo" required  autofocus @if(isset($ofc))value="{{$ofc->cargo}}"@else value="" @endif>
                  </div>

                    
                                                        
                </div>
                </div>
                
                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
                
                <div class="row">
                <div class="col-md-12 center-block">
                <div class="col-md-2">
                  Fecha del anexo:
                  </div>
                  <div class="col-md-2">
                  <input type="date" id="fechanex" name="fechanex" required  autofocus @if(isset($ofc)) value="<?php echo date("Y-m-d", strtotime($ofc->fechanex));?>" @else value="" @endif>
                  </div>
                  <div class="col-md-1"></div>                                     
                  <div class="col-md-2">
                  Emitido por:
                  </div>
                  <div class="col-md-2">
                  <input type="text" id="emitidopor" name="emitidopor" required  autofocus @if(isset($ofc))value="{{$ofc->emitidopor}}"@else value="" @endif>
                  <select id="ubicacion" name="ubicacion"  >
                  <option value="0">Selecciona ubicación</option>
                  @foreach($ubica as $ub)
                  <!-- $ubica->all() as $ub -->
                  <option value="{!! $ub->juzgados !!}" >{!! $ub->juzgados !!}</option>                                   
                  @endforeach
                  </select>
                  </div>
                  
                  
                    
                                                        
                </div>
                </div>
                
                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
                
                <div class="row">
                <div class="col-md-12 center-block">
                <div class="col-md-2">
                  Motivos a solicitar:
                  </div>
                  <div class="col-md-4">                  
                   <textarea id="motivossol" name="motivossol" rows="4" cols="50" required  autofocus >@if(isset($ofc)){{$ofc->motivossol}}@else @endif</textarea> 
                  </div>
                  <div class="col-md-1"></div>                                     
                  <div class="col-md-1">
                  Numerales:
                  </div>
                  <div class="col-md-2">
                  <input type="text" id="numerales" name="numerales" required  autofocus @if(isset($ofc))value="{{$ofc->numerales}}"@else value="" @endif>
                  </div>
                  
                                                        
                </div>
                </div>
                
                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
                <div class="row">
                <div class="col-md-12 center-block">
                  <div class="col-md-2">
                  Fecha límite:
                  </div>
                  <div class="col-md-2">                  
                  <input type="date" id="fechalimit" name="fechalimit" required  autofocus @if(isset($ofc)) value="<?php echo date("Y-m-d", strtotime($ofc->fechalimit));?>" @else value="" @endif >
                  </div>  
                                                        
                </div>
                </div>
                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
                
                <div class="row">
                <div class="col-md-12 center-block">                                     
                  <center>
                  
                  @if(isset($ofc))<a  href="/oficios/{{$ofc->scanoffice}}">ESCANEO ACTUAL: {{$ofc->scanoffice}} </a> <input type="hidden" id="scan" name="scan" value="{{$ofc->scanoffice}}" > @else <input type="file" id="scan" name="scan" required  autofocus > @endif
                  
                  </center>
                                                        
                </div>
                </div>
                
                <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>
                
                <div class="row">
                <div class="col-md-12 center-block">                                     
                  <center>
                  <input type="submit"  class="btn btn-success btn-block" value="Registrar">
                  </center>
                                                        
                </div>
                </div>
                
                
                </div>
                
            </div>
            </div>
            @endforeach
            {!! Form::close() !!}
            @else 
            {!! Form::open(array('url' => '/ingresadatostres', 'method' => 'post', 'files' => true)) !!}
            <input type="hidden" name="_token" value=" {{csrf_token()}}" id="token">
       <div class="row">
                <div class="col-md-12 center-block">
                <div class="jumbotron" > 
                
                
                <div class="row">
                <div class="col-md-12">   
                <div class="col-md-2 ">
                 Expedientes Registrados: 
                  </div>
                  <div class="col-md-3">
                  <select id="prerg" name="prerg" class="form-control" >
                  <option value="0">Selecciona No. Juicio</option>
                  @foreach($datas as $ub)
                  <!-- $ubica->all() as $ub -->
                  <option value="{!! $ub->expediente !!}" >{!! $ub->expediente !!}</option>                                   
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
                <div class="col-md-2">
                  Expediente: 
                  </div>
                  <div class="col-md-4">
                  <input class="form-control" type="text" id="expediente" name="expediente" required  autofocus>
                  </div>
                  
                                                                                                    
                 </div>
                 </div>
                <!--  <div class="col-md-12">&nbsp;</div><div class="col-md-12">&nbsp;</div>-->
                <div class="row">
                <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  Quejoso:
                  </div>
                  <div class="col-md-4">
                  <input class="form-control" type="text" id="quejoso" name="quejoso"  required  autofocus >
                  </div>
                  </div>
                  </div>
                  
                 <div class="row">
                <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  No.Juicio:
                  </div>
                  <div class="col-md-4">
                  <input class="form-control" type="text" id="nojuicio" name="nojuicio" placeholder="" required  autofocus >
                  </div>    
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12 center-block">                                     
                  <div class="col-md-2">
                  Asunto:
                  </div>
                  <div class="col-md-4">
                  <input class="form-control" type="text" id="asunto" name="asunto" required  autofocus>
                  </div>

                                                 
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">                                     
                  <div class="col-md-2">
                  Para quién va dirigido:
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" id="paradigido" name="paradigido" required  autofocus >
                  </div>

                  <div class="col-md-2">
                  Cargo del dirigente:
                  </div>
                  <div class="col-md-5">
                  <input class="form-control" type="text" id="cargo" name="cargo" required  autofocus >
                  </div>                                  
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">                                     
                  <div class="col-md-2">
                  Fecha de registro:
                  </div>
                  <div class="col-md-4">
                  <input class="form-control" type="date" id="fechanex" name="fechanex" required  autofocus >
                  </div>
                  
                  <div class="col-md-2">
                  Fecha límite:
                  </div>
                  <div class="col-md-4">                  
                  <input class="form-control" type="date" id="fechalimit" name="fechalimit"  > 
                  </div>

                                                    
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12 center-block">
                  <div class="col-md-2">
                  Emitido por:
                  </div>
                  <div class="col-md-4">
                  <select id="ubicacion" name="ubicacion" class="form-control" >
                  <option value="0">Selecciona ubicación</option>
                  @foreach($ubica as $ub)
                  <!-- $ubica->all() as $ub -->
                  <option value="{!! $ub->juzgados !!}" >{!! $ub->juzgados !!}</option>                                   
                  @endforeach
                  </select>                  
                  </div>
                  <div class="col-md-2">Otro:</div>                                              
                  <div class="col-md-4">
                  <input class="form-control" type="text" id="emitidopor" name="emitidopor" required  autofocus >
                  </div>                                      
                  </div>
                  </div>
                  

                  
                  <div class="row">
                  <div class="col-md-12 center-block">                  
                  <div class="col-md-2">
                  Escaneo de oficio:
                  </div>
                  <div class="col-md-4">
                  <input  type="file" id="scan" name="scan" required  autofocus >
                  <div id="filesmore"></div>
                  </div>
                                                        
                  </div>
                  </div>
                  
                  <div class="row">
                  <div class="col-md-12">
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
