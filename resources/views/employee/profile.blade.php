@extends('layout.master')

@section('content')
<section class="section profile">
	<div class="card d-flex flex-row">
		<img class="photo" src="{{ url('storage/images/256x256.png') }}">
		<div class="summary">
			<h1 class="name">{{ $user->fullname }}</h1>
			<span class="gender is-block {{ !is_null($user->gender) ?: 'hide' }}">
				<i class="fa {{ $user->gender == 'F' ? 'fa-female' : 'fa-male' }} icon"></i>{{ $user->gender_full }}
			</span>
			<span class="dob is-block {{ !is_null($user->dob) ?: 'hide' }}"><i class="fa fa-calendar icon"></i>{{ $user->dob }}</span>
			<span class="phone-number is-block {{ !is_null($user->phone_number) ?: 'hide' }}"><i class="fa fa-phone icon"></i>{{ $user->phone_number }}</span>
			<span class="email is-block"><i class="fa fa-envelope icon"></i>{{ $user->email }}</span>
			<span class="address is-block {{ !is_null($user->address) ?: 'hide' }}"><i class="fa fa-user icon"></i>{{ $user->address }}</span>
		</div>
	</div>
</section>
<section class="section experience mt-2">
	<div class="card p-3">
		<header class="d-flex mb-4">
			<h2 class="title flex-grow-1 font-weight-400">Experience</h2>
			<a href="#" class="action text-secondary"><span class="fa fa-plus"></span></a>
		</header>
		<ul class="list-style-none p-0">
			@foreach($user->experiences as $experience)
    			<li>
                    <div class="media inner-wrapper">
                        <img class="d-flex mr-3" src="{{ url('storage/images/64x64.png') }}">
                        <div class="media-body">
                            <h2 class="title">{{ $experience->title }}</h2>
                            <h3 class="company">{{ $experience->company_name }}</h3>
                            <h4 class="period">{{ $experience->from_date_m_y }} - {{ $experience->to_date_m_y }}</h4>
                            <h4 class="location">{{ $experience->location }}</h4>
                            <p class="el-detail mt-3 text-muted-50">{{ $experience->extra_detail }}</p>
                        </div>
                    </div>
    			</li>
    		@endforeach
		</ul>
	</div>
</section>
<section class="section education mt-2">
	<div class="card p-3">
		<header class="d-flex mb-4">
			<h2 class="title flex-grow-1 font-weight-400">Education</h2>
			<a href="#" class="action text-secondary"><span class="fa fa-plus"></span></a>
		</header>
		<ul class="list-style-none p-0">
			@foreach($user->educations as $education)
    			<li>
                    <div class="media inner-wrapper">
                        <img class="d-flex mr-3" src="{{ url('storage/images/64x64.png') }}">
                        <div class="media-body">
                            <h2 class="title">{{ $education->title }}</h2>
                            <h3 class="college">{{ $education->college }}</h3>
                            <h4 class="period">{{ $education->from_date_m_y }} - {{ $education->to_date_m_y }}</h4>
                            <p class="el-detail mt-3 text-muted-50">{{ $education->extra_detail }}</p>
                        </div>
                    </div>
    			</li>
    		@endforeach
		</ul>
	</div>
</section>
@stop
