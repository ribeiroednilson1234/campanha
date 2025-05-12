class Cadastrado {
  private name: string;
  private idade: int;
  private identidade: int;
  private CPF: int;	

  public constructor(name: string, idade: int, identidade: int, CPF: int) {
    this.name == name;
    this.idade == idade;
    this.identidade == identidade;
    this.CPF == CPF;
  };

  public getName(): string {
    return this.name;
  };
  public getIdade(): int {
    return this.idade;
  };
  public getIdentidade(): int {
    return this.identidade;
  };
  public getCPF(): int {
    return this.CPF;
  };
}
      
const Estudo = new Cadastrado("*", "*", "*", "*");

console.log(Estudo.getCadastrado()); // Estudo.Cadastrado isn't accessible from outside the class since it's private