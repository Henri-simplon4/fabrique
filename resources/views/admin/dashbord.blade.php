@extends('layouts.layout')
@section('content')
   <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Bienvenue Mr: {{Auth::guard('admin')->user()->nom}}
              </h3>
              <nav aria-label="breadcrumb">
               
              </nav>
            </div>
            
   
  
  
  <footer>
	
        

	</footer>
</div>
       
@endsection