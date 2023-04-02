import java.util.List;

public class Recipe
{
    private List<Ingredient> ingredients;

    public Recipe(List<Ingredient> ingredients)
    {
        this.ingredients = ingredients;
    }

    // #region Getters and Setters
    public List<Ingredient> getIngredients()
    {
        return this.ingredients;
    }

    public void setIngredients(List<Ingredient> ingredients)
    {
        this.ingredients = ingredients;
    }
    // #endregion
}
