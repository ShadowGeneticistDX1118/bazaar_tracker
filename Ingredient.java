/**
 * @author  storm
 * @version Apr 02, 2023
 **/
public class Ingredient
{
    private String name;
    private int    amount;

    public Ingredient(String name, int amount)
    {
        this.name   = name;
        this.amount = amount;
    }

    // #region Getters and Setters
    public String getName()
    {
        return this.name;
    }

    public void setName(String name)
    {
        this.name = name;
    }

    public int getAmount()
    {
        return this.amount;
    }

    public void setAmount(int amount)
    {
        this.amount = amount;
    }
    // #endregion

}
