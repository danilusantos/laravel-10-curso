@csrf
<input type="text" placeholder="Assunto" name="subject" value="{{ $support ? $support->subject : old('subject') }}">
<br>
@error('subject')
    <p>{{ $message }}</p>
@enderror
<select name="status" id="status">
    <option value="" {{ old('status') }}>Selecione</option>
    <option value="a"{{ $support && $support->status === 'a' ? 'selected' : old('status') }}>Ativo</option>
    <option value="p"{{ $support && $support->status === 'p' ? 'selected' : old('status') }}>Pendente</option>
    <option value="c"{{ $support && $support->status === 'c' ? 'selected' : old('status') }}>Concluído</option>
</select>
<br>
@error('status')
    <p>{{ $message }}</p>
@enderror

<textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{ $support ? $support->body : old('body') }}</textarea>
<br>
@error('body')
    <p>{{ $message }}</p>
@enderror

<button type="submit">Salvar</button>
