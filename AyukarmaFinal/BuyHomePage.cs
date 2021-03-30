using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AyukarmaFinal
{
    public partial class BuyHomePage : Form
    {
        public BuyHomePage()
        {
            InitializeComponent();
            customizeDising();
        }

        //"buy products" buttons dropdown code
        private void customizeDising()
        {
            panel1.Visible = false;
            panel2.Visible = false;
            
        }
        private void hideSubMenu()
        {
            if (panel1.Visible == true)
                panel1.Visible = false;
            if (panel2.Visible == true)
                panel2.Visible = false;
             
        }
 
        private void showSubMenu(Panel subMenu)
        {
            if (subMenu.Visible == false)
            {
                hideSubMenu();
                subMenu.Visible = true;
            }
            else
                subMenu.Visible = false;

        }

        private void gunaButton1_Click(object sender, EventArgs e)
        {
            showSubMenu(panel2);
        }

        private void gunaButton3_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton4_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton5_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton6_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton7_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton8_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton2_Click(object sender, EventArgs e)
        {
            showSubMenu(panel1);
        }

        private void gunaButton14_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton13_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton12_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton11_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton10_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void gunaButton9_Click(object sender, EventArgs e)
        {
            hideSubMenu();
        }

        private void BuyHomePage_Load(object sender, EventArgs e)
        {

        }

        int count = 0;
        private void timer1_Tick(object sender, EventArgs e)
        {
            if (count < 9)
            {
                gunaCirclePictureBox3.Image = imageList1.Images[count];
                count++;
            }
            else
            {
                count = 0;
            }
        }
    }
}
