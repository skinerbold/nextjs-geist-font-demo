@extends('layouts.app')

@section('content')
<style>
    .panel-container {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
    }
    .panel {
        background: linear-gradient(to bottom, #a3c9d9, #4a6a7a);
        border: 2px solid #a3c9d9;
        border-radius: 5px;
        flex: 1;
        padding: 10px;
        color: black;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .panel-header {
        flex: 1;
        border: 1px solid #a3c9d9;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        text-align: center;
        background: linear-gradient(to bottom, #a3c9d9, #4a6a7a);
    }
    .panel-buttons {
        display: flex;
        gap: 10px;
        justify-content: center;
    }
    .panel-buttons button {
        background: #a3c9d9;
        border: none;
        border-radius: 5px;
        padding: 5px 10px;
        cursor: pointer;
        font-weight: bold;
        color: black;
    }
    .panel-buttons button:hover {
        background: #7aa6bb;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background: linear-gradient(to bottom, #a3c9d9, #4a6a7a);
        color: black;
    }
    th, td {
        border: 1px solid #a3c9d9;
        padding: 8px;
        text-align: center;
        font-size: 12px;
    }
    th {
        background: linear-gradient(to bottom, #4a6a7a, #a3c9d9);
    }
</style>

<div class="panel-container">
    <div class="panel">
        <div class="panel-header">PDF ORIGINAL</div>
        <div class="panel-buttons">
            <button>Arquivos</button>
            <button>Upload</button>
        </div>
    </div>
    <div class="panel">
        <div class="panel-header">GLOSA</div>
        <div class="panel-buttons">
            <button>Editar</button>
            <button>Salvar</button>
            <button>Traduzir</button>
        </div>
    </div>
    <div class="panel">
        <div class="panel-header" style="flex: 1; display: flex; flex-direction: column; justify-content: space-around;">
            <div>LEGENDAS</div>
            <div>AVATAR</div>
            <div>IMAGENS</div>
        </div>
        <div class="panel-buttons">
            <button>Cancelar</button>
            <button>Baixar</button>
        </div>
    </div>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME DO ARQUIVO</th>
            <th>TIPO</th>
            <th>GLOSA</th>
            <th>TRADUÇÃO</th>
            <th>USUÁRIO</th>
            <th>DATA DO REGISTRO</th>
            <th>DATA DA ATUALIZAÇÃO</th>
            <th>EXCLUIR</th>
            <th>BAIXAR</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td colspan="9"></td>
        </tr>
    </tbody>
</table>
@endsection
