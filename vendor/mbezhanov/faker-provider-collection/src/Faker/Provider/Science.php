<?php

namespace Bezhanov\Faker\Provider;

use Faker\Provider\Base;

class Science extends Base
{
    protected static $chemicalElement = ["Hydrogen", "Helium", "Lithium", "Beryllium", "Boron", "Carbon", "Nitrogen", "Oxygen", "Fluorine", "Neon", "Sodium", "Magnesium", "Aluminum", "Silicon", "Phosphorus", "Sulfur", "Chlorine", "Argon", "Potassium", "Calcium", "Scandium", "Titanium", "Vanadium", "Chromium", "Manganese", "Iron", "Cobalt", "Nickel", "Copper", "Zinc", "Gallium", "Germanium", "Arsenic", "Selenium", "Bromine", "Krypton", "Rubidium", "Strontium", "Yttrium", "Zirconium", "Niobium", "Molybdenum", "Technetium", "Ruthenium", "Rhodium", "Palladium", "Silver", "Cadmium", "Indium", "Tin", "Antimony", "Tellurium", "Iodine", "Xenon", "Cesium", "Barium", "Lanthanum", "Cerium", "Praseodymium", "Neodymium", "Promethium", "Samarium", "Europium", "Gadolinium", "Terbium", "Dysprosium", "Holmium", "Erbium", "Thulium", "Ytterbium", "Lutetium", "Hafnium", "Tantalum", "Tungsten", "Rhenium", "Osmium", "Iridium", "Platinum", "Gold", "Mercury", "Thallium", "Lead", "Bismuth", "Polonium", "Astatine", "Radon", "Francium", "Radium", "Actinium", "Thorium", "Protactinium", "Uranium", "Neptunium", "Plutonium", "Americium", "Curium", "Berkelium", "Californium", "Einsteinium", "Fermium", "Mendelevium", "Nobelium", "Lawrencium", "Rutherfordium", "Dubnium", "Seaborgium", "Bohrium", "Hassium", "Meitnerium", "Darmstadtium", "Roentgenium", "Copernicium", "Nihonium", "Flerovium", "Moscovium", "Livermorium", "Tennessine", "Oganesson"];
    protected static $chemicalElementSymbol = ["H", "He", "Li", "Be", "B", "C", "N", "O", "F", "Ne", "Na", "Mg", "Al", "Si", "P", "S", "Cl", "Ar", "K", "Ca", "Sc", "Ti", "V", "Cr", "Mn", "Fe", "Co", "Ni", "Cu", "Zn", "Ga", "Ge", "As", "Se", "Br", "Kr", "Rb", "Sr", "Y", "Zr", "Nb", "Mo", "Tc", "Ru", "Rh", "Pd", "Ag", "Cd", "In", "Sn", "Sb", "Te", "I", "Xe", "Cs", "Ba", "La", "Ce", "Pr", "Nd", "Pm", "Sm", "Eu", "Gd", "Tb", "Dy", "Ho", "Er", "Tm", "Yb", "Lu", "Hf", "Ta", "W", "Re", "Os", "Ir", "Pt", "Au", "Hg", "Tl", "Pb", "Bi", "Po", "At", "Rn", "Fr", "Ra", "Ac", "Th", "Pa", "U", "Np", "Pu", "Am", "Cm", "Bk", "Cf", "Es", "Fm", "Md", "No", "Lr", "Rf", "Db", "Sg", "Bh", "Hs", "Mt", "Ds", "Rg", "Cn", "Nh", "Fl", "Mc", "Lv", "Ts", "Og"];
    protected static $scientist = ["Isaac Newton", "Albert Einstein", "Neils Bohr", "Charles Darwin", "Louis Pasteur", "Sigmund Freud", "Galileo Galilei", "Antoine Laurent Lavoisier", "Johannes Kepler", "Nicolaus Copernicus", "Michael Faraday", "James Clerk Maxwell", "Claude Bernard", "Franz Boas", "Werner Heisenberg", "Linus Pauling", "Rudolf Virchow", "Erwin Schrodinger", "Ernest Rutherford", "Paul Dirac", "Andreas Vesalius", "Tycho Brahe", "Comte de Buffon", "Ludwig Boltzmann", "Max Planck", "Marie Curie", "William Herschel", "Charles Lyell", "Pierre Simon de Laplace", "Edwin Hubble", "Joseph J. Thomson", "Max Born", "Francis Crick", "Enrico Fermi", "Leonard Euler", "Justus Liebig", "Arthur Eddington", "William Harvey", "Marcello Malpighi", "Christiaan Huygens", "Carl Gauss (Karl Friedrich Gauss)", "Albrecht von Haller", "August Kekule", "Robert Koch", "Murray Gell-Mann", "Emil Fischer", "Dmitri Mendeleev", "Sheldon Glashow", "James Watson", "John Bardeen", "John von Neumann", "Richard Feynman", "Alfred Wegener", "Stephen Hawking", "Anton van Leeuwenhoek", "Max von Laue", "Gustav Kirchhoff", "Hans Bethe", "Euclid", "Gregor Mendel", "Heike Kamerlingh Onnes", "Thomas Hunt Morgan", "Hermann von Helmholtz", "Paul Ehrlich", "Ernst Mayr", "Charles Sherrington", "Theodosius Dobzhansky", "Max Delbruck", "Jean Baptiste Lamarck", "William Bayliss", "Noam Chomsky", "Frederick Sanger", "Lucretius", "John Dalton", "Louis Victor de Broglie", "Carl Linnaeus", "Jean Piaget", "George Gaylord Simpson", "Claude Levi-Strauss", "Lynn Margulis", "Karl Landsteiner", "Konrad Lorenz", "Edward O. Wilson", "Frederick Gowland Hopkins", "Gertrude Belle Elion", "Hans Selye", "J. Robert Oppenheimer", "Edward Teller", "Willard Libby", "Ernst Haeckel", "Jonas Salk", "Emil Kraepelin", "Trofim Lysenko", "Francis Galton", "Alfred Binet", "Alfred Kinsey", "Alexander Fleming", "B. F. Skinner", "Wilhelm Wundt", "Archimedes"];

    public function chemicalElement(): string
    {
        return static::randomElement(static::$chemicalElement);
    }

    public function chemicalElementSymbol(): string
    {
        return static::randomElement(static::$chemicalElementSymbol);
    }

    public function scientist(): string
    {
        return static::randomElement(static::$scientist);
    }
}
