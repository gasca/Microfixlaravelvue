

                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Nombre</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="text"
                        name="Nombre" placeholder="Escribe tu nombre" value="{{'Jesus', old('Nombre'), $user->nombre}}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        {{-- manera mas reciente de poner mensajes de error --}}
                                @error('Nombre')
                                    <p>{{ $message}}</p>
                                @enderror
                  </label>


                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Apellidos</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="text"
                        name="Apellidos" placeholder="Escribe tus Apellidos" value= "{{ 'Gasca', old('Apellidos')  }}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        @if($errors->has('Apellidos'))
                        <p>{{ $errors->first('Apellidos') }}</p>
                    @endif
                  </label>


                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Correo</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="email"
                        name="Correo" placeholder="Escribe tu Correo"   value= "{{'ing.eduardo@gmail.com', old('Correo')  }}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        @if($errors->has('Correo'))
                        <p>{{ $errors->first('Correo') }}</p>
                        @endif

                  </label>


                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Contraseña</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="password"
                        name="Password" placeholder="Escribe una Contraseña"   value= "{{'12345', old('Password')  }}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        @if($errors->has('Password'))
                        <p>{{ $errors->first('Password') }}</p>
                        @endif
                  </label>


                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Repetir Contraseña</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="password"
                        name="Password2" placeholder="Repite Contraseña"   value= "{{'12345', old('Password2')  }}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        @if($errors->has('Password2'))
                            <p>{{ $errors->first('Password2') }}</p>
                        @endif

                  </label>


                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Ciudad</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="text"
                        name="Ciudad" placeholder="Ciudad"   value= "{{'Irapuato', old('Ciudad')  }}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        @if($errors->has('Ciudad'))
                        <p>{{ $errors->first('Ciudad') }}</p>
                    @endif

                  </label>


                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Colonia</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="text"
                        name="Colonia" placeholder="Colonia"   value= "{{'villas', old('Colonia')  }}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        @if($errors->has('Colonia'))
                        <p>{{ $errors->first('Colonia') }}</p>
                    @endif

                  </label>


                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Dirección</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="text"
                        name="Direccion" placeholder="Dirección"   value= "{{ 'morelos', old('Direccion')  }}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        @if($errors->has('Direccion'))
                            <p>{{ $errors->first('Direccion') }}</p>
                        @endif
                  </label>


                <label class="block">
                    <span class="block text-sm font-medium text-slate-700">Número de Celular/Whatsapp</span>
                    <!-- Using form state modifers, the classes can be identical for every input -->
                        <input type="text"
                        name="Celular" placeholder="Número para contactarte"   value= "{{'4621121121', old('Celular')  }}"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                        invalid:border-pink-500 invalid:text-pink-600
                        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                        "/>
                        @if($errors->has('Celular'))
                        <p>{{ $errors->first('Celular') }}</p>
                    @endif

                  </label>



