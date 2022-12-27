#include <stdio.h>
#include <stdlib.h>


/*-------------------------symbole de controle---------------------------------------------------------------
void my_iscntrl(char symbole)
{
    if(symbole=='\a' || symbole=='\b' || symbole=='\t' || symbole=='\n' || symbole=='\v' || symbole=='\f' || symbole=='\r')
    {
        printf("Ceci est un caractere de controle!");
    }
    else
    {
        printf("Ceci n'est pas un caractere de controle!");
    }
}*/

/*---------------------------------verifier s'il s'agit d'une lettre minuscule--------------------------------
char my_islower(char lettre)
{
    if(lettre >= 'a' && lettre<='z')
    {
        printf("Ceci est une lettre minuscule!");
    }
    else{
        printf("Ceci n'est pas une lettre minuscule!");
    }
}*/

/*--------------------------------------------retrouver les espaces----------------------------------
char my_space(char a)
{
    if(a == ' ')
    {
        printf("Ceci est un espacement!");
    }
    else
    {
        printf("Ceci n'est pas un espacement");
    }
}*/
/*--------------------------------retrouver la ponctuation------------------------------------------------------------
char my_ispunct(char a)
{
    if((a == ';') || (a == ',') || (a =='.') || (a =='!') || (a =='<') || (a =='>') || (a =='?')|| (a =='\"')|| (a =='\'') || (a =='[')|| (a ==']') || (a =='{')|| (a =='}') || (a ==' " ') || (a =='(')|| (a ==')'))
    {
        printf("Ceci est une ponctuation");
    }
    else
    {
        printf("Ceci n'est pas une ponctuation");
    }
    return a;
}
*/

/*---------------------minuscule a majuscule--------------------------
char my_toupper(char val)
{
    if(val>='a' && val<='z')
    {
        val = val-32;
    }
    printf("La majuscule de cette lettre est: %c", val);
    return val;
}
*/

/*-------------------------majuscule a minuscsule--------------------
char my_tolower(char val)
{
    if(val>='A' && val<='Z')
    {
        val = val+32;
    }
    printf("La minuscule de cette lettre est: %c", val);
    return val;
}
*/

void qhsort(int tab[], int taille)
{
    int i, j;
    int tmp=0;
    for(i = 0; i<taille; i++)
    {
        for(j= i+1; j<taille; j++)
        {
            if(tab[i]> tab[j])
            {
                tmp= tab[i];
                tab[i]=tab[j];
                tab[j]=tmp;
            }
        }
    }
}

void chargertab(int tab[], int taille)
{
    for(int i=0; i < taille; i++)
    {
        printf("Entrer l'element d'indice %d: ", i);
        scanf("%d", &tab[i]);
    }
}

void retounertab(int tab[], int taille)
{
    qhsort(tab, taille);
    for(int i=0; i<taille; i++)
    {
        printf("%d", tab[i]);
        printf("\n");
    }
}
int main()
{
        int tail = 10;
        int tableau[tail];
        chargertab(tableau, tail);
        printf("Le tableau trie est:");
        retounertab(tableau, tail);
        return 0;
}
