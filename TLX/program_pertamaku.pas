program program_pertamaku;
uses crt;
var
	kalimat:string;
begin
	clrscr;
	readln(kalimat);
	if (length(kalimat)<=100) then
	writeln(kalimat);
end.