@extends('admin.layouts.app')

@section('title', 'Editar imagem do admin')

@section('content')
<h1 class="w-full text-3xl text-black pb-6">
    Editar imagem do admin - {{ $admin->name }}
</h1>
<div class="flex flex-wrap">
    <div class="w-full my-6 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" action="{{ route('admins.update.image', $admin->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @include('admin.includes.alerts')
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Nova Imagem</label>
                    <input class="w-full px-5  py-2 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file">
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Atualizar Imagem</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection