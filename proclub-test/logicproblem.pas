program logicproblem;
uses crt;
var
	t,tx,n,a,b,cn,nx,arrlength:integer;
	arr,length:array of integer;
begin
	clrscr;
	readln(t);
	for tx:=1 to t do begin
		read(n,a);readln(b);
		setlength(length,t);
		setlength(arr,n);
		for nx:=0 to n-2 do begin
			read(arr[nx]);
		end;
		readln(arr[n-1]);
		length[tx]:=0;
		for cn:=0 to n-1 do begin
			nx:=cn;
			arrlength:=0;
			repeat
				if ((arr[nx]>=a) AND (arr[nx]<=b)) then begin
					arrlength:=arrlength+1;
					nx:=nx+arr[nx];
				end
			until ((arr[nx]<a) OR (arr[nx]>b) OR (nx>n-1));
			if (length[tx]<=arrlength) then
				length[tx]:=arrlength;
		end;
	end;
	for tx:=1 to t do
		writeln('Case #',tx,': ',length[tx]);
	readln;
end.
