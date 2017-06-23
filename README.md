

## Berechenbarkeit und Komplexität

### Hausaufgaben

Peter Bangert, 380260 
Pauline Duckstein, 381384

Abgabedatum: 30/6/2017





	
### Aufgabe 1. Loop und While Programming

___
	
	
#### 1)
Die Funktion f : N2 →N sei deﬁniert als f(0,y) = teilbar(y,0) f(x + 1,y) = f(x,y) + teilbar(y,x + 1).
Was gibt der Funktionswert f(x,y) an? Geben Sie ein LOOP-Programm an, das die Funktion f berechnet.

```{r, tidy=FALSE, eval=FALSE, highlight=FALSE }
x_1 := x_1 + 1;			//x
x_2 := x_2 + 0; 		//y

LOOP x_1 DO 
	IF x_1  != 0  THEN 
		x_3 := x_2 MOD x_1; 
		IF x_3 = 0 THEN 	
			x_0 := x_0 + 1;
		END
	END
END

```	

#### 2)
 Die Funktion g : N2 →N sei deﬁniert als g(x,y) = kleiner(f(x,x),y), wobei f die Funktion aus der vorherigen Aufgabe ist. Welche Funktion wird von µ(g) berechnet? Geben Sie hierf¨ur den Typ an und erkl¨aren Sie, was der Funktionswert ist (hierbei soll nat¨urlich nicht einfach nur die Deﬁnition des µ-Operators eingesetzt werden, sondern eine umgangssprachliche Beschreibung samt Begr¨undung gegeben werden). Schreiben Sie ein WHILE-Programm, das die Funktion µ(g) berechnet. Hinweis: Sie k¨onnen hierf¨ur annehmen, dass Pf ein LOOP-Programm zur Berechnung von f ist. Sie d¨urfen die Zuweisung xi := Pf(xj,x`) verwenden (die Werte in xj und x` sind hier die Eingaben) und davon ausgehen, dass in Pf keine Variablen vorkommen, die in Ihrem Programm verwendet werden.

 
```{r, tidy=FALSE, eval=FALSE, highlight=FALSE }
x_1 := x_1 + 0;			//x
x_2 := x_2 + 0; 		//y
x_3 := Pf(x_2,x_2);

WHILE x_3 < x_1 DO
	x_2 ++;
	x_3 := Pf(x_2, x_2);

END WHILE	
 
```
 
### Aufgabe 2. Kurzesten WHILE programme 

___

Gegeben sei eine nat¨urliche Zahl n. Wir nennen ein modiﬁziertes WHILE-Programm, das auf der Eingabe x1 = 0 die Zahl n in x0 ausgibt, ein erzeugendes Programm f¨ ur n. (Gehen Sie immer davon aus, dass alle anderen Variablen initial mit 0 belegt sind.) Hierbei sind modiﬁzierte WHILE-Programme folgendermaßen deﬁniert: F¨ur Variablen x0,x1,... sind • xi := 0 • xi := xj • xi := xj + 1 • xi := xj −1 (modiﬁzierte Subtraktion von 1) • xi := xj ·2 (Multiplikation mit 2) modiﬁzierte WHILE-Programme. F¨ur modiﬁzierte WHILE-Programme P,P0 sind • P;P0 • WHILE xi 6= 0 DO P END • IF xi > xj THEN P END ebenfalls modiﬁzierte WHILE-Programme. Als L¨ange eines Programmes bezeichnen wir die Summe aus der Anzahl der Zuweisungen (:=), der Anzahl der WHILE-Schleifen und der Anzahl der IF-Abfragen.

#### 1)
Argumentieren Sie zun¨achst, dass jede WHILE-berechenbare Funktion auch von einem modiﬁzierten WHILE-Programm berechnet werden kann



#### 2)
Beweisen Sie, dass es keine Konstante c ∈ N gibt, sodass f¨ur jede nat¨urliche Zahl n ein erzeugendes Programm existiert, das k¨urzer als c ist.



#### 3)
Sei φ : N → N die Funktion, die f¨ur eine nat¨urliche Zahl n die L¨ange eines k¨urzesten erzeugenden Programms f¨ ur n angibt. Beweisen Sie, dass φ(n) nicht WHILE-berechenbar ist, indem Sie einen Widerspruchsbeweis f¨uhren, bei dem Sie wie folgt vorgehen: • Gehen Sie davon aus, dass es ein modiﬁziertes WHILE-Programm Pφ gibt, welches auf Eingabe x1 = n die Ausgabe x0 = φ(n) berechnet. Nehmen Sie an, dass Pφ die L¨ange cφ hat und dass xmax die Variable mit dem gr¨oßten vorkommenden Index ist. Sie d¨urfen desweiteren annehmen, dass Pφ den Inhalt von x1 nicht ¨andert. • Konstruieren Sie ein neues modiﬁziertes WHILE-Programm, welches eine Zahl n in x0 ausgibt, aber k¨urzer ist als φ(n). Sie d¨urfen dabei die Zuweisung x0 := Pφ(x1) verwenden, was aber die L¨ange Ihres Programms um cφ erh¨oht. Sie d¨urfen in Ihrem Programm Zuweisungen der Art xi := xj +c verwenden. Falls Sie keine weiteren Erkl¨arungen hinzuf¨ugen, erh¨oht eine solche Zuweisung die L¨ange Ihres Programms um c






### Aufgabe 3. *(Semi-)Entscheidbar oder nicht?*
Zeigen Sie f¨ur jede der folgenden Sprachen, ob sie entscheidbar ist oder nicht. Falls eine Sprache entscheidbar ist, beschreiben Sie hierf¨ur die algorithmische Arbeitsweise einer deterministischen Turing-Maschine, die diese Sprache entscheidet. Um zu zeigen, dass eine Sprache unentscheidbar ist, geben Sie eine Reduktion von einem aus der Vorlesung bekannten unentscheidbaren Problem auf die jeweilige Sprache an. Begr¨unden Sie außerdem f¨ur jede unentscheidbare Sprache, ob diese semi-entscheidbar ist oder nicht. Hinweis: Im Folgenden sei BIN−1(x) ∈ N f¨ ur x ∈ {0,1}∗ die nat¨urliche Zahl, die durch x bin¨arkodiert wird und Mw bezeichne die von w ∈ {0,1}∗ kodierte TuringMaschine (wie in der Vorlesung deﬁniert). Die Anzahl der Besuche eines Zustands w¨ahrend einer Berechnung entspricht der Anzahl an Konﬁgurationen in der Konﬁgurationsfolge dieser Berechnung, in denen der Zustand auftaucht.

#### 3)
L1 = {w#x | w,x ∈{0,1}∗ und Mw besucht auf Eingabe x jeden ihrer NichtEndzust¨ande mindestens einmal}

#### 3)
 L2 = {w#x | w,x ∈{0,1}∗ und Mw hat BIN−1(x) verschiedene Zust¨ande} 

#### 3)
L3 = {w#x | w,x ∈{0,1}∗ und Mw besucht auf Eingabe x jeden ihrer NichtEndzust¨ande genau einmal, bevor sie einen Zustand zum zweiten Mal besucht oder akzeptiert}

#### 3)
L4 = {w#x | w,x ∈{0,1}∗ und Mw besucht auf Eingabe x mindestens einen ihrer Nicht-Endzust¨ande nicht}
