@extends('layouts.main')
@section('content')

    <h1>Checkout - {{ $plano['nome'] }}</h1>
    <form action="{{ route('processar', $plano -> id ) }}" method="POST">
        @csrf
        <input type="hidden" name="customer_id" value="{{$customer['id']}}">
        <input type="hidden" name="billingType" value="CREDIT_CARD">
        <h2>Dados do cartão</h2>
        <input type="text" name="creditCard[holderName]" placeholder="Nome do titular" value="marcelo h almeida">
        <input type="text" name="creditCard[number]" placeholder="Número do cartão" value="5162306219378829">
        <input type="text" name="creditCard[expiryMonth]" placeholder="Mês de validade" value="05">
        <input type="text" name="creditCard[expiryYear]" placeholder="Ano de validade" value="2021">
        <input type="text" name="creditCard[ccv]" placeholder="CVV" value="318">

        <h2>Informações do titular</h2>
        <input type="text" name="creditCardHolderInfo[name]" placeholder="Nome completo" value="{{$customer['name']}}">
        <input type="email" name="creditCardHolderInfo[email]" placeholder="Email" value="{{$customer['email']}}">
        <input type="text" name="creditCardHolderInfo[cpfCnpj]" placeholder="CPF/CNPJ" value="{{$customer['cpfCnpj']}}">
        <input type="text" name="creditCardHolderInfo[postalCode]" placeholder="CEP" value="{{$customer['postalCode']}}">
        <input type="text" name="creditCardHolderInfo[addressNumber]" placeholder="Número" value="{{$customer['addressNumber']}}">
        <input type="text" name="creditCardHolderInfo[phone]" placeholder="Telefone" value="{{$customer['phone']}}">
        <input type="text" name="creditCardHolderInfo[mobilePhone]" placeholder="Celular" value="{{$customer['mobilePhone']}}">

        <button type="submit">Finalizar pagamento</button>
    </form>

@endsection
