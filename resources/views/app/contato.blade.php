@extends('layouts.app')

@section('title')
    <title>Contato</title>
@endsection


@section('body')
<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('contato.submit')}}" method="post" class="mt-4 mb-4">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="nome@exemplo.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Assunto</label>
                <select name="subject" class="form-control">
                    <option value="">Selecione uma opção</option>
                    <option value="vendas">Vendas</option>
                    <option value="entregas">Entregas</option>
                    <option value="s & r">Sugestões e Reclamações</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Mensagem</label>
                <textarea class="form-control" rows="3" name="message"></textarea>
            </div>
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
        </form>
    <div class="col"></div>
</div>
@endsection







