@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex flex-column justify-content-between text-white" style="background-color: #0b130e; font-family: system-ui, -apple-system, sans-serif;">
    
    <div class="container-fluid px-4 px-lg-5 my-auto py-5">
        <div class="row align-items-center g-5">
            
            <!-- SECCIÓN IZQUIERDA: Panel Informativo SENA (Estilo Full Screen) -->
            <div class="col-lg-6 pe-lg-5">
                
                <!-- Badge Superior -->
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-4" 
                     style="background-color: rgba(22, 120, 12, 0.15); border: 1px solid rgba(22, 120, 12, 0.4); color: #2bf01b; font-size: 0.85rem;">
                    <span>🏛️</span>
                    <span class="fw-semibold">PLATAFORMA INTEGRADA DE GESTIÓN ACADÉMICA</span>
                </div>

                <!-- Título Principal -->
                <h1 class="display-4 fw-bold lh-sm mb-3">
                    Portal de Administración <br>
                    <span style="color: #2bf01b;">SENA</span>
                </h1>

                <p class="lead text-white-50 mb-4 fs-6" style="max-width: 540px;">
                    Accede a la gestión centralizada de fichas, programas de formación y autenticación por roles para aprendices, instructores y administradores.
                </p>

                <!-- Cards Informativas del SENA -->
                <div class="row g-3 my-2 mb-4">
                    <div class="col-sm-6">
                        <div class="p-3 rounded-4 h-100" style="background-color: #121e16; border: 1px solid #1c3023;">
                            <div class="d-flex align-items-center gap-2 mb-1" style="color: #2bf01b;">
                                <span class="fs-5">✓</span>
                                <span class="fw-bold small text-uppercase">Gestión Activa</span>
                            </div>
                            <h6 class="fw-bold text-white mb-1">Fichas y Programas</h6>
                            <p class="small text-white-50 mb-0" style="font-size: 0.8rem;">Control completo de convocatorias e inscritos.</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="p-3 rounded-4 h-100" style="background-color: #121e16; border: 1px solid #1c3023;">
                            <div class="d-flex align-items-center gap-2 mb-1" style="color: #2bf01b;">
                                <span class="fs-5">🛡️</span>
                                <span class="fw-bold small text-uppercase">Seguridad</span>
                            </div>
                            <h6 class="fw-bold text-white mb-1">Acceso Centralizado</h6>
                            <p class="small text-white-50 mb-0" style="font-size: 0.8rem;">Autenticación por roles asignados.</p>
                        </div>
                    </div>
                </div>

                <!-- Badges de certificación/cumplimiento -->
                <div class="d-flex flex-wrap gap-3 small text-white-50 pt-2" style="font-size: 0.75rem;">
                    <span>✓ Servicio Nacional de Aprendizaje</span>
                    <span>•</span>
                    <span>✓ Colombia Potencia de la Vida</span>
                </div>

            </div>

            <!-- SECCIÓN DERECHA: Card de Registro (Estilo Frosted Dark) -->
            <div class="col-lg-6 col-xl-5 offset-xl-1">
                <div class="p-4 p-sm-5 rounded-4 shadow-lg" style="background-color: #121e16; border: 1px solid #1c3023;">
                    
                    <!-- Encabezado Formulario -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <span class="badge rounded-pill px-3 py-1 mb-2 fw-semibold" style="background-color: rgba(22, 120, 12, 0.2); color: #2bf01b; border: 1px solid rgba(43, 240, 27, 0.3); font-size: 0.75rem;">
                                ● REGISTRO OFICIAL
                            </span>
                            <h2 class="fw-bold text-white mb-1 fs-3">Crear Cuenta</h2>
                            <p class="text-white-50 small mb-0">Ingresa tus datos institucionales para habilitar tu perfil</p>
                        </div>
                    </div>

                    <!-- Formulario -->
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf

                        <!-- NOMBRE COMPLETO -->
                        <div class="mb-3">
                            <label for="name" class="form-label text-white-50 small mb-1">Nombre Completo</label>
                            <input id="name" type="text" 
                                   class="form-control text-white border-0 @error('name') is-invalid @enderror" 
                                   name="name" value="{{ old('name') }}" required autofocus placeholder="Ej. Carlos Pérez"
                                   style="background-color: #0b130e; border-radius: 10px; padding: 0.65rem 0.9rem; font-size: 0.9rem;">
                            @error('name')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- TIPO Y NÚMERO DE DOCUMENTO -->
                        <div class="row g-2 mb-3">
                            <div class="col-5">
                                <label for="document_type" class="form-label text-white-50 small mb-1">Tipo Doc.</label>
                                <select id="document_type" class="form-select text-white border-0 @error('document_type') is-invalid @enderror" 
                                        name="document_type" required 
                                        style="background-color: #0b130e; border-radius: 10px; padding: 0.65rem 0.9rem; font-size: 0.9rem;">
                                    <option value="" disabled {{ old('document_type') ? '' : 'selected' }}>Seleccionar...</option>
                                    <option value="CC" {{ old('document_type') == 'CC' ? 'selected' : '' }}>C.C.</option>
                                    <option value="TI" {{ old('document_type') == 'TI' ? 'selected' : '' }}>T.I.</option>
                                    <option value="CE" {{ old('document_type') == 'CE' ? 'selected' : '' }}>C.E.</option>
                                </select>
                            </div>
                            <div class="col-7">
                                <label for="document_number" class="form-label text-white-50 small mb-1">N° Documento</label>
                                <input id="document_number" type="text" 
                                       class="form-control text-white border-0 @error('document_number') is-invalid @enderror" 
                                       name="document_number" value="{{ old('document_number') }}" required placeholder="1001234567"
                                       style="background-color: #0b130e; border-radius: 10px; padding: 0.65rem 0.9rem; font-size: 0.9rem;">
                            </div>
                        </div>

                        <!-- CORREO INSTITUCIONAL -->
                        <div class="mb-3">
                            <label for="email" class="form-label text-white-50 small mb-1">Correo Electrónico Institucional</label>
                            <input id="email" type="email" 
                                   class="form-control text-white border-0 @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required placeholder="ejemplo@sena.edu.co"
                                   style="background-color: #0b130e; border-radius: 10px; padding: 0.65rem 0.9rem; font-size: 0.9rem;">
                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- ROL Y FICHA -->
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label for="role" class="form-label text-white-50 small mb-1">Rol de Usuario</label>
                                <select id="role" class="form-select text-white border-0 @error('role') is-invalid @enderror" 
                                        name="role" required 
                                        style="background-color: #0b130e; border-radius: 10px; padding: 0.65rem 0.9rem; font-size: 0.9rem;">
                                    <option value="" disabled {{ old('role') ? '' : 'selected' }}>Seleccionar...</option>
                                    <option value="estudiante" {{ old('role') == 'estudiante' ? 'selected' : '' }}>Aprendiz</option>
                                    <option value="profesor" {{ old('role') == 'profesor' ? 'selected' : '' }}>Instructor</option>
                                    <option value="administrador" {{ old('role') == 'administrador' ? 'selected' : '' }}>Administrador</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="ficha" class="form-label text-white-50 small mb-1">N° Ficha <span class="text-white-50 fw-light">(Opc.)</span></label>
                                <input id="ficha" type="text" class="form-control text-white border-0" 
                                       name="ficha" value="{{ old('ficha') }}" placeholder="Ej. 3223899"
                                       style="background-color: #0b130e; border-radius: 10px; padding: 0.65rem 0.9rem; font-size: 0.9rem;">
                            </div>
                        </div>

                        <!-- CONTRASEÑA Y CONFIRMACIÓN -->
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label for="password" class="form-label text-white-50 small mb-1">Contraseña</label>
                                <input id="password" type="password" class="form-control text-white border-0" 
                                       name="password" required placeholder="••••••••"
                                       style="background-color: #0b130e; border-radius: 10px; padding: 0.65rem 0.9rem; font-size: 0.9rem;">
                            </div>
                            <div class="col-6">
                                <label for="password-confirm" class="form-label text-white-50 small mb-1">Confirmar</label>
                                <input id="password-confirm" type="password" class="form-control text-white border-0" 
                                       name="password_confirmation" required placeholder="••••••••"
                                       style="background-color: #0b130e; border-radius: 10px; padding: 0.65rem 0.9rem; font-size: 0.9rem;">
                            </div>
                        </div>

                        <!-- CHECKBOX TÉRMINOS -->
                        <div class="form-check mb-4">
                            <input class="form-check-input bg-dark border-secondary" type="checkbox" name="terms" id="terms" required {{ old('terms') ? 'checked' : '' }}>
                            <label class="form-check-label text-white-50 small" for="terms">
                                Acepto los <a href="#" class="text-decoration-none fw-semibold" style="color: #2bf01b;">términos de servicio</a> y políticas.
                            </label>
                        </div>

                        <!-- BOTÓN PRINCIPAL (Con Neón Verde) -->
                        <button type="submit" class="btn w-100 fw-bold py-2 px-4 shadow-sm text-white" 
                                style="background: linear-gradient(135deg, #16780c 0%, #0e5207 100%); border: 1px solid #2bf01b; border-radius: 10px; font-size: 0.95rem;">
                            Registrar Cuenta →
                        </button>

                    </form>

                    <!-- ENLACE AL LOGIN -->
                    <div class="text-center pt-4 mt-3 border-top border-secondary border-opacity-25">
                        <p class="text-white-50 small mb-0">
                            ¿Ya tienes una cuenta?
                            <a href="{{ url('/login') }}" class="fw-bold text-decoration-none ms-1" style="color: #2bf01b;">
                                Inicia sesión aquí
                            </a>
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- FOOTER INFERIOR -->
    <div class="container-fluid px-4 px-lg-5 py-3 border-top border-secondary border-opacity-10 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 small text-white-50" style="font-size: 0.8rem;">
        <div>
            © {{ date('Y') }} Admin SENA. Todos los derechos reservados.
        </div>
        <div class="d-flex gap-4">
            <a href="#" class="text-white-50 text-decoration-none">Términos de servicio</a>
            <a href="#" class="text-white-50 text-decoration-none">Privacidad</a>
            <a href="#" class="text-white-50 text-decoration-none">Soporte</a>
        </div>
    </div>

</div>
@endsection