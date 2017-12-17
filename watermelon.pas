program watermelon;
var
	w,i:integer;
	res:boolean;
begin
	readln(w);
	res:=false;
	i:=0;
	while ((i<w) AND(not(res))) do begin
		i:=i+2;
		if (((w - i) mod 2) = 0) then begin
			res:=true;
		end;
	end;
	if (res) then begin
		writeln('YES');
	end else begin
		writeln('NO');
	end;
	readln;
end.