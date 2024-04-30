<input type="text" placeholder="Assunto" name="subject" value="{{ $support ? $support->subject : old('subject') }}"
    required>
<select name="status" id="status" required>
    <option value="" {{ old('status') }}>Selecione</option>
    <option value="a"{{ $support && $support->status === 'a' ? 'selected' : old('status') }}>Ativo</option>
    <option value="p"{{ $support && $support->status === 'p' ? 'selected' : old('status') }}>Pendente</option>
    <option value="c"{{ $support && $support->status === 'c' ? 'selected' : old('status') }}>Concluído</option>
</select>
<textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição" required>{{ $support ? $support->body : old('body') }}</textarea>

<button type="submit">Salvar</button>
