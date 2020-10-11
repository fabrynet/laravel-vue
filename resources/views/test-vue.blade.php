@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    <h1>Test Vue</h1>
                  </div>

                  <div class="card-body">

                    <h1>@{{ message }}</h1>
                    <p>
                      @{{ htmlMessage }}
                    </p>
                    {{-- rendering dell'HTML in Vue --}}
                    <p v-html="htmlMessage"></p>

                    <p>@{{ sayHello() }}</p>
                    <p v-html="sayHello()"></p>

                    <p>
                      <img src="{{ asset('img/jobs.png') }}" alt="" width="100px">
                    </p>
                    <p>
                      {{-- :src immagine gestita da Vue tramite variabile --}}
                      <img :src="imgJobs" width="100px">
                    </p>

                    <div class="form-group">
                      <label for="fname">First Name</label>
                      <input id="fname" type="text" v-model="inputFName">
                      <label for="lname">Last Name</label>
                      <input id="lname" type="text" v-model="inputLName">
                      <h2 v-if="inputFName || inputLName">
                        Utente: @{{ inputFName }} @{{ inputLName }}
                      </h2>
                    </div>

                    <h2>
                      Method random value: @{{ getRand() }}
                    </h2>
                    <h2>
                      Method random value: @{{ getRand() }}
                    </h2>
                    <h2>
                      Method random value: @{{ getRand() }}
                    </h2>
                    <h2>
                      {{-- i risultati delle computed vengono trattati come variabili -> le computed vengono eseguite una volta sola e poi salvate in una variabile --}}
                      Computed random value: @{{ getCompRand }}
                    </h2>
                    <h2>
                      Computed random value: @{{ getCompRand }}
                    </h2>
                    <h2>
                      Computed random value: @{{ getCompRand }}
                    </h2>

                    <div class="form-group">
                      <label for="fullname">Full name:</label>
                      <input id="fullname" type="text" v-model="fullName">
                      <h2 v-if="fname">First name: @{{ fname }}</h2>
                      <h2 v-if="lname">Last name: @{{ lname }}</h2>
                    </div>

                    <div class="form-group">
                      <label for="km">Km</label>
                      <input id="km" type="number" v-model="km">
                      <label for="m">m</label>
                      <input id="m" type="number" v-model="m">
                    </div>

                    <testcomponent></testcomponent>

                    <outtestcomponent
                      :text="'Hello World from outtestcomponent'"
                    ></outtestcomponent>
                    <outtestcomponent
                      :text="'Ciao Mondo da outtestcomponent'"
                    ></outtestcomponent>

                  </div>

              </div>
          </div>
      </div>
  </div>

@endsection
