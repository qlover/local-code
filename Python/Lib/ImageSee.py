from PIL import Image
import pytesseract
import sys

imageUrl = sys.argv[1]
text=pytesseract.image_to_string(Image.open(imageUrl),lang='chi_sim')
print(text)
