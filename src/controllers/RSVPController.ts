import { Request, Response } from 'express';
import { RSVP } from '../models/RSVP';
import { generateInvitationCard } from '../utils/generateInvitationCard';

export class RSVPController {
    // Function to handle guest wishes
    public async handleGuestWish(req: Request, res: Response): Promise<void> {
        const { name, wish } = req.body;

        // Validate the input
        if (!name || !wish) {
            res.status(400).json({ error: 'Name and wish are required.' });
            return;
        }

        try {
            // Save name and wish to database
            const newRSVP = new RSVP({ name, wish });
            await newRSVP.save();

            // Generate personalized invitation card
            const cardPath = await generateInvitationCard(name);

            // Create a token (this could be a simple UUID or something more complex)
            const token = this.createToken(name);

            // Send response with token for downloading invitation card
            res.status(200).json({ token, cardPath });
        } catch (error) {
            console.error('Error handling guest wish:', error);
            res.status(500).json({ error: 'An error occurred while processing your request.' });
        }
    }

    // Function to create a token (simple implementation)
    private createToken(name: string): string {
        return Buffer.from(name).toString('base64'); // Example token generation using Base64 encoding
    }
}